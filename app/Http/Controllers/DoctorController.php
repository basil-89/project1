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

class DoctorController extends Controller
{
    

    public function add_doctor_page()
    {
 
        $country = Country::get();
        $category = Category::where('status',1)->get();
        $services  = Services::get();
        $date = date('Y-m-d');

        return view('admin/doctors/add-new',compact('country','category','services','date'));
    }

    public function doctor_add(Request $request)
    {


        $doctor_check = DoctorInfo::where('email',$request->email)->first();

        if($doctor_check){

            return redirect()->back()->with('msg','Doctor Already Exsit..!!');

        }else{


        $doctor_info = new DoctorInfo;
            
        $doctor_info->name =  $request->name;
        $doctor_info->email =  $request->email;
        $doctor_info->phone =  $request->phone;
        $doctor_info->detail =  $request->info;
        $doctor_info->specializations =  $request->specialization;
        $doctor_info->education =  $request->education;
        $doctor_info->memberships =  $request->member;
        $doctor_info->registrations =  $request->reg;
        $doctor_info->web =  $request->web;
        $doctor_info->address	 =  $request->locaddress1;
        $doctor_info->country =  $request->loccountry;
        $doctor_info->city =  $request->loccity;
        $doctor_info->joined =  $request->date;
        $doctor_info->department =  $request->department;
        $doctor_info->experience =  $request->exp;
        $doctor_info->mobile =  $request->mobile;
        $doctor_info->state = $request->locstate;

        if($request->hasFile('image')){
    
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path=public_path();
            $file->move($path.'/assets/img/doctors' , $filename);
            $doctor_info->image = $filename;   
           }
   
           $doctor_info->service = json_encode($request->param);

        $doctor_info->save();
        }
 
        return redirect('admin/doctors')->with('msg','Doctor created successfully..!!');

    }


    public function showdoctoradmin()
{

    $doctor_info = DoctorInfo::get();
    $category = Category::get();
    $country = Country::get();

    return view('admin/doctors/index',compact('doctor_info','category','country'));
}


public function doctor_detail_show($id){
    $doctor_info = DoctorInfo::find($id);
    $category = Category::where('id',$doctor_info->department)->where('status',1)->first();
    $country = Country::where('id',$doctor_info->country)->first();
    $test = json_decode($doctor_info->service);
    $services = Services::whereIn('id',$test)->get();
    $review = Review::get();

    return view('frontend_file.doctor-details',compact('doctor_info','category','country','services','review'));

}
    public function doctor_active($id){
        $doctor = DoctorInfo::find($id);
        $doctor->status = 1;
        $doctor->save();
    
        return redirect()->back()->with('msg','Status successfully..!!');
    
    }
    
    public function doctor_inactive($id){
        $doctor = DoctorInfo::find($id);
        $doctor->status = 0;
        $doctor->save();
    
        return redirect()->back()->with('msg','Status successfully..!!');
    
    }
    
    public function doctor_delete(Request $request){
        $doctor = DoctorInfo::find($request->delete_id);
        $doctor->delete();
    
        return redirect()->back()->with('msg','Deleted successfully..!!');
    
    }
    
    public function edit_doctor($id){
        $doctor = DoctorInfo::find($id);
        $category_name = Category::where('id',$doctor->department)->first();
        $category = Category::get();
        $country_name = Country::where('id',$doctor->country)->first();
        $state = State::where('id',$doctor->state)->first();
        $city = City::where('id',$doctor->city)->first();
        $country = Country::get();
    
        $test = json_decode($doctor->service);
        $services_name = Services::whereIn('id',$test)->get();
        $services = Services::get();
    
        return view('admin/doctors/doctor-edit',compact('doctor','category','country','services','category_name','services_name','country_name','city','state'));
    
    }
    
    public function update_doctor(Request $request)
    {
    
        $doctor = DoctorInfo::find($request->id);
            
        $oldtrainingdocument = $request->post('oldimage');
        if ($request->has('image')) {
            if ($oldtrainingdocument != "") {
                $Path = public_path('assets/hospital_images/') . '/' . $oldtrainingdocument;
    
                if (file_exists($Path)) {
    
                   unlink($Path);
                }
            }
    
        
            $filename = "";
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path=public_path();
            $file->move($path.'/assets/img/doctors' , $filename);
           
        } else {
            if ($request['oldimage'] != "") {
                $filename = $request['oldimage'];
            }
    }
        $doctor->name =  $request->name;
        $doctor->email =  $request->email;
        $doctor->phone =  $request->phone;
        $doctor->detail =  $request->info;
        $doctor->specializations =  $request->specialization;
        $doctor->education =  $request->education;
        $doctor->memberships =  $request->member;
        $doctor->registrations =  $request->reg;
        $doctor->web =  $request->web;
        $doctor->address	 =  $request->locaddress1;
        $doctor->country =  $request->loccountry;
        $doctor->city =  $request->loccity;
        $doctor->joined =  $request->date;
        $doctor->department =  $request->department;
        $doctor->experience =  $request->exp;
        $doctor->mobile =  $request->mobile;
        $doctor->state = $request->locstate;
        $doctor->image = $filename;
    
        $doctor->service = json_encode($request->param);
    
    
         
            $doctor->save();
    
            return redirect('admin/doctors')->with('msg','Updated successfully..!!');
        }
    

    public function AddReview(Request $request)
{

    
    DB::table('doctor_rating')
    ->insert([
        'name' => $request->name,
        'rating' => $request->rating,
        'comment' => $request->comment,
        'doctor_id' => $request->id,

    ]);

    

    return redirect()->back()->with('msg','Review Added successfully..!!');
}


public function DoctorPage()
{

    $department = Category::where('status',1)->get();
    $doctor_info = DoctorInfo::get();
    $country = Country::get();

    return view('frontend_file.doctors',compact('department','doctor_info','country'));
}
}
