<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Category;
use App\Models\State;
use App\Models\City;
use App\Models\DoctorInfo;
use App\Models\Services;
use App\Models\Review;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use Session;

class AdminController extends Controller
{
    //

    public function store(Request $request)
    {
        // dd($request->all());

        $country_check = Country::where('country',$request->name)->first();

        if($country_check){

            return redirect('admin/country')->with('msg','country Already Exsit..!!');

        }else{
        $country = new Country;
            
        $country->country =  $request->name;
  
        $country->save();
        }
        return redirect('admin/country')->with('msg','country created successfully..!!');
    }

    public function show_country()
    {
 
        $country = Country::get();
        $state = State::get();

        return view('admin/state/index',compact('country','state'));
    }

    public function category_add(Request $request)
    {

        $cat_check = Category::where('category_name',$request->name)->first();

        if($cat_check){

            return redirect('admin/categories')->with('msg','category Already Exsit..!!');
    
            }else{

                $category = new Category;
            
                $category->category_name =  $request->name;
                $category->detail =  $request->detail;
        
                if($request->hasFile('image')){
            
                    $file = $request->file('image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    $path=public_path();
                    $file->move($path.'/assets/img/icon' , $filename);
                    $category->image = $filename;   
                   }
           
                $category->save();
        

            }
 
        return redirect('admin/categories')->with('msg','category created successfully..!!');
    }

    public function state_add(Request $request)
    {


        $state_check = State::where('state_name',$request->state)->first();

        if($state_check){

        return redirect('admin/state')->with('msg','state Already Exsit..!!');

        }else{

            $state = new State;
            
            $state->state_name =  $request->state;
            $state->country_id =  $request->country;
    
       
            $state->save();
    
        }
    
        return redirect('admin/state')->with('msg','state created successfully..!!');
    }


    public function show_state()
    {
 
        $country = Country::get();
        $city = City::get();

        return view('admin/city/index',compact('country','city'));
    }

    public function add_city(Request $request)
    {


        $city_check = City::where('city_name',$request->city)->first();

        if($city_check){

            return redirect('admin/city')->with('msg','city Already Exsit..!!');

        }else{
        $city = new City;
            
        $city->state_id =  $request->state_id;
        $city->city_name =  $request->city;

        $city->save();
        }
        return redirect('admin/city')->with('msg','city created successfully..!!');
    }


    public function indexPage()
    {
 
        $department = Category::where('status',1)->get();
        $doctor_info = DoctorInfo::get();
        $country = Country::get();

        return view('index',compact('department','doctor_info','country'));
    }

    public function add_services(Request $request)
    {

        $services = new Services;
            
        // $services->service_name =  $request->service_name;
  
        foreach ($request->service_name as $key => $insert) {

            $service = array();
            $service['service_name'] = $request->service_name[$key];
            Services::create($service);
            }
          
    
        // $services->save();
 
        return redirect()->back();
    }


    public function show_category()
    {
 
        $department = Category::where('status',1)->get();
        return view('admin/categories/index',compact('department'));
    }

   public function edit_category($id){
        $category = Category::find($id);
        return $category;

   }

   public function update_category(Request $request)
   {

       $category = Category::find($request->edit_id);
           
       $category->category_name =  $request->name;
       $category->detail =  $request->detail;

       if($request->hasFile('image')){
   
           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $path=public_path();
           $file->move($path.'/assets/img/icon' , $filename);
           $category->image = $filename;   
          }
  
       $category->save();


      return redirect('admin/categories')->with('msg','Updated successfully..!!');
   }

   public function delete_category(Request $request){
    $Category = Category::find($request->delete_id);
    // $Category->delete();
    $Category->status = 0;
    $Category->save();

    $doctor_info = DoctorInfo::where('department',$request->delete_id)->update(['department' => 0]);

    return redirect('admin/categories')->with('msg','Delete successfully..!!');

}

public function show_country_data()
{

    $country = Country::get();
    return view('admin/country/index',compact('country'));
}

public function edit_country($id){
    $country = Country::find($id);
    return $country;

}

public function update_country(Request $request)
{

    $country = Country::find($request->edit_id);
        
    $country->country =  $request->name;

    $country->save();

    return redirect('admin/country')->with('msg','country updated successfully..!!');
}

public function country_delete(Request $request){
    $Country = Country::find($request->delete_id);
    $Country->delete();

    $states = State::where('country_id',$request->delete_id)->delete();
    $doctor_info = DoctorInfo::where('department',$request->delete_id)->update(['country' => 0]);

    return redirect('admin/country')->with('msg','Delete successfully..!!');

}

public function state_edit($id){
    $state = State::find($id);
    $Country = Country::where('id',$state->country_id)->first();

    return response()->json(['state' => $state, 'Country' => $Country]);
}

public function update_state(Request $request)
{

    $state = State::find($request->edit_id);
    $state->state_name =  $request->state;
    $state->country_id =  $request->country;

    $state->save();

    return redirect()->back()->with('msg','state updated successfully..!!');
}

public function state_delete(Request $request){
    $state = State::find($request->delete_id);
    $state->delete();

    $city = City::where('state_id',$request->delete_id)->delete();

    return redirect()->back()->with('msg','Deleted successfully..!!');

}



public function rate_doctor()
{


    return view('frontend_file.doctor-review');
}

public function review_add(Request $request)
{



        $review = new Review;
        
        $review->review_q =  $request->title;
        $review->option_1 = json_encode($request->opt);

        $review->save();

    

    return redirect()->back()->with('msg','state created successfully..!!');
}


public function show_service()
{

    $services = Services::get();

    
    return view('admin/services/index',compact('services'));
}

public function edit_service($id){
    $services = Services::find($id);
    return $services;

}

public function update_services(Request $request)
{

    $services = Services::find($request->edit_id);
        
     $services->service_name =  $request->service;
     $services->save();

    return redirect()->back();
}

public function service_delete(Request $request){
    $services = Services::find($request->delete_id);
    $services->delete();

    return redirect()->back()->with('msg','Deleted successfully..!!');

}

public function edit_city($id){
    $city = City::find($id);
    return $city;

}

public function update_city(Request $request)
{

    $city = City::find($request->edit_id);
        
     $city->city_name =  $request->city;
     $city->save();

    return redirect()->back();
}

public function city_delete(Request $request){
    $city = City::find($request->delete_id);
    $city->delete();

    return redirect()->back()->with('msg','Deleted successfully..!!');

}


public function admin_info(){
    $admin = Auth::user();
    return view('admin/profile-settings/personal-information',compact('admin'));

}

public function admin_update(Request $request){
    $user = User::find($request->id);

    $user->name =  $request->name;
    $user->email =  $request->email;
    $user->phone =  $request->phone;

    if($request->hasFile('profile_avatar')){
   
        $file = $request->file('profile_avatar');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $path=public_path();
        $file->move($path.'/assets' , $filename);
        $user->image = $filename;   
       }

       $user->save();

       return redirect()->back()->with('msg','profile updated successfully..!!');

}

public function change_password(){
    $admin = Auth::user();
    return view('admin/profile-settings/change-password',compact('admin'));

}

public function update_password(Request $request)
{
    $request->validate([
        'old_password' => 'required|min:6',
        'password' => 'required|min:6',
        'password_confirmation' => 'required|same:password|min:6',
    ]);
    $data = $request->all();
    $id = auth()->user();
    if(Hash::check($data['old_password'], $id->password) == true)
    {
        $id->password = Hash::make($data['password']);
        $id->save();
        return redirect()->back()->with('msg','Password Update Successfully...!!');
    }
    else
    {
        return redirect()->back()->with('msg','Old password does not match');
    }
}




}