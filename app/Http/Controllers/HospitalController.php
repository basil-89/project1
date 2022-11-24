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
class HospitalController extends Controller
{
    
    public function ShowHospital(){

        $hospital = DB::table('hospital')->get();
    
       
        return view('admin/hospital/index',compact('hospital'));
    
    }
    
    public function AddHospital(){
       
        $country = Country::get();
        $category = category::get();
    
        return view('admin/hospital/add-hospital',compact('country','category'));
    
    }
    
    public function StoreHospital(Request $request){
       
    
    
        if($request->hasFile('hospital_image')){
        
            $filename ="";
    
            $file = $request->file('hospital_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path=public_path();
            $file->move($path.'/assets/hospital_images/' , $filename);
           }
    
    
        DB::table('hospital')
        ->insert([
            'hospital_name' => $request->hospital_name,
            'hospital_email' => $request->hospital_email,
            'hospital_phone' => $request->hospital_phone,
            'hospital_mobile' => $request->hospital_mobile,
            'hospital_detail' => $request->hospital_info,
            'hospital_web' => $request->hospital_web,
            'department' => implode(",",$request['department']),
            'beds' => $request->beds,
            'hospital_address' => $request->hospital_locaddress1,
            'hospital_country' => $request->hospital_loccountry,
            'hospital_city' => $request->loccity,
            'hospital_state' => $request->locstate,
            'hospital_image' => $filename,
    
        ]);
    
        
    
        return redirect('admin/hospital')->with('msg','Hospital Added successfully..!!');
    
    }
    
    public function DeleteHospital(Request $request){
    
        $Affected = DB::table('hospital')->where('id',$request->delete_id)->delete();
        return redirect('admin/hospital')->with('msg','Hospital Deleted successfully..!!');
    
    }
    
    public function EditHospital($id){
    
        $hospital = DB::table('hospital')->where('id',$id)->first();
        $country_name = Country::where('id',$hospital->hospital_country)->first();
        $state = State::where('id',$hospital->hospital_state)->first();
        $city = City::where('id',$hospital->hospital_city)->first();
        $country = Country::get();
    
        $departmentid = explode(",",$hospital->department);
        $categoryname = Category::whereIn('id',$departmentid)->get();
        $category = Category::get();
    
        return view('admin/hospital/edit-hospital',compact('hospital','country_name','state','city','country','category','categoryname'));
    
    }
    
    public function UpdateHospital(Request $request)
    {
    
        $oldtrainingdocument = $request->post('oldimage');
        if ($request->has('hospital_image')) {
            if ($oldtrainingdocument != "") {
                $Path = public_path('assets/hospital_images/') . '/' . $oldtrainingdocument;
    
                if (file_exists($Path)) {
    
                   unlink($Path);
                }
            }
    
        
            $filename = "";
            $file = $request->file('hospital_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path=public_path();
            $file->move($path.'/assets/hospital_images/' , $filename);
           
        } else {
            if ($request['oldimage'] != "") {
                $filename = $request['oldimage'];
            }
    }
    
    
        DB::table('hospital')->where('id',$request->hospital_id)
        ->update([
            'hospital_name' => $request->hospital_name,
            'hospital_email' => $request->hospital_email,
            'hospital_phone' => $request->hospital_phone,
            'hospital_mobile' => $request->hospital_mobile,
            'hospital_detail' => $request->hospital_info,
            'hospital_web' => $request->hospital_web,
            'department' => implode(",",$request['department']),
            'beds' => $request->beds,
            'hospital_address' => $request->hospital_locaddress1,
            'hospital_country' => $request->hospital_loccountry,
            'hospital_city' => $request->loccity,
            'hospital_state' => $request->locstate,
            'hospital_image' => $filename,
    
        ]);
    
        
    
        return redirect('admin/hospital')->with('msg','Hospital Updated successfully..!!');
    
    
    }

    public function IndexHospital()
{

    $hospital = DB::table('hospital')->get();
    $country = Country::get();

    return view('frontend_file.hospital',compact('hospital','country'));
}

public function AddHospitalReview(Request $request)
{

    
    DB::table('hospital_review')
    ->insert([
        'name' => $request->name,
        'rating' => $request->rating,
        'comment' => $request->comment,
        'hospital_id' => $request->id,

    ]);

    

    return redirect()->back()->with('msg','Review Added successfully..!!');
}

public function ShowHospitalDetail($id)
{

    
   $hospital =  DB::table('hospital')->where('id',$id)->first();
   $country = Country::where('id',$hospital->hospital_country)->first();

   $department = explode(",",$hospital->department);

   $category = Category::whereIn('id',$department)->get();

   $avg_stars = DB::table('hospital_review')->where('hospital_id',$hospital->id)
   ->avg('rating');
   $avg_rate = DB::table('hospital_review')->where('hospital_id',$hospital->id)
   ->get();

   $avg_review = DB::table('hospital_review')->where('hospital_id',$hospital->id)
   ->count();


   return view('frontend_file.hospital-details',compact('hospital','country','avg_stars','avg_rate','avg_review','category','id'));
}
}
