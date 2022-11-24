<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();


Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('user-index', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('logout', [App\Http\Controllers\Auth\LoginController::class,'logout']);
Route::get('/', [App\Http\Controllers\AdminController::class, 'indexPage']);

Route::get('about', function () {
    return view('frontend_file.about');
});

Route::get('login/facebook', [App\Http\Controllers\Auth\RegisterController::class, 'redirectToFacebook'])->name('Login.facebook');
Route::get('facebook/callback', [App\Http\Controllers\Auth\RegisterController::class, 'handleFacebookCallback']);



Route::get('contact', function () {
    return view('frontend_file.contact');
});

Route::get('blog-standard', function () {
    return view('frontend_file.blog-standard');
});

Route::get('blog-details', function () {
    return view('frontend_file.blog-details');
});

Route::get('sign-in', function () {
    return view('frontend_file.sign-in');
});




// Admin Routes


Route::get('/admin/login', function () {
    return view('admin/auth/login');
});
Route::get('/admin/forgot-password', function () {
    return view('admin/auth/forget-password');
});

Route::get('/admin/new-password', function () {
    return view('admin/auth/new-password');
});




Route::get('/admin/doctor/requests', function () {
    return view('admin/doctors/requests');
});



Route::get('/admin/listing', function () {
    return view('admin/listing/index');
});

Route::get('/admin/blogs', function () {
    return view('admin/blogs/index');
});

Route::get('/admin/blog/add-post', function () {
    return view('admin/blogs/add-post');
});

Route::get('/admin/blogs/categories', function () {
    return view('admin/blogs/categories');
});

Route::get('/admin/listing/add', function () {
    return view('admin/listing/add-new');
});


Route::get('/admin/job-attributes/basic-details', function () {
    return view('admin/job-attributes/basic-details');
});

Route::get('/admin/job-attributes/pay-options', function () {
    return view('admin/job-attributes/pay-options');
});

Route::get('/admin/job-attributes/benefits', function () {
    return view('admin/job-attributes/benefits');
});


Route::get('/admin/page-content/home', function () {
    return view('admin/page-content/home');
});

Route::get('/admin/page-content/general-information', function () {
    return view('admin/page-content/general-information');
});


Route::get('/admin/client-queries/', function () {
    return view('admin/client-queries/index');
});

Route::get('/admin/client-query/detail', function () {
    return view('admin/client-queries/detail');
});


Route::get('/admin/categories/', function () {
    return view('admin/categories/index');
});



Route::get('/admin/page/add-new', function () {
    return view('admin/pages/add-new');
})->name('admin.categories');


Route::get('/admin/pages/', function () {
    return view('admin/pages/index');
});


Route::get('/admin/news-letters/', function () {
    return view('admin/news-letters/index');
});


Route::get('/admin/bookings', function () {
    return view('admin/bookings/index');
});







Route::get('/admin/service/', [App\Http\Controllers\AdminController::class, 'show_service']);
Route::get('service-edit/{id}', [App\Http\Controllers\AdminController::class, 'edit_service']);
Route::post('/admin/update-service/', [App\Http\Controllers\AdminController::class, 'update_services']);
Route::post('admin/delete_service', [App\Http\Controllers\AdminController::class, 'service_delete']);
Route::get('/admin/categories/', [App\Http\Controllers\AdminController::class, 'show_category']);
Route::post('admin/add-country', [App\Http\Controllers\AdminController::class, 'store']);
Route::post('admin/add-category', [App\Http\Controllers\AdminController::class, 'category_add']);



Route::get('/admin/state/', [App\Http\Controllers\AdminController::class, 'show_country']);
Route::post('/admin/add-state/', [App\Http\Controllers\AdminController::class, 'state_add']);
Route::post('/admin/add-service/', [App\Http\Controllers\AdminController::class, 'add_services']);

Route::get('/admin/city/', [App\Http\Controllers\AdminController::class, 'show_state']);

Route::get('getCourse/{id}', function ($id) {
    $course = App\Models\State::where('country_id',$id)->get();
    return response()->json($course);
});

Route::post('/admin/add-city/', [App\Http\Controllers\AdminController::class, 'add_city']);
Route::get('city-edit/{id}', [App\Http\Controllers\AdminController::class, 'edit_city']);
Route::post('/admin/update-city/', [App\Http\Controllers\AdminController::class, 'update_city']);
Route::post('/admin/delete_city/', [App\Http\Controllers\AdminController::class, 'city_delete']);



Route::get('getCity/{id}', function ($id) {
    $city = App\Models\City::where('state_id',$id)->get();
    return response()->json($city);
});


Route::get('category-edit/{id}' , [App\Http\Controllers\AdminController::class, 'edit_category']);
Route::post('admin/update-category', [App\Http\Controllers\AdminController::class, 'update_category']);
Route::post('admin/category_delete', [App\Http\Controllers\AdminController::class, 'delete_category']);
Route::get('/admin/country/' , [App\Http\Controllers\AdminController::class, 'show_country_data']);
Route::get('country-edit/{id}' , [App\Http\Controllers\AdminController::class, 'edit_country']);
Route::post('admin/update-country', [App\Http\Controllers\AdminController::class, 'update_country']);
Route::post('admin/delete_country', [App\Http\Controllers\AdminController::class, 'country_delete']);
Route::get('state-edit/{id}' , [App\Http\Controllers\AdminController::class, 'state_edit']);
Route::post('admin/update-state', [App\Http\Controllers\AdminController::class, 'update_state']);
Route::post('admin/delete_state', [App\Http\Controllers\AdminController::class, 'state_delete']);




Route::get('raiting-review' , [App\Http\Controllers\AdminController::class, 'rate_doctor']);

Route::get('/admin/add-rating', function () {
    return view('admin/rating/index');
});

Route::post('/admin/add_rating/', [App\Http\Controllers\AdminController::class, 'review_add']);
Route::get('admin/personal-information/', [App\Http\Controllers\AdminController::class, 'admin_info']);
Route::post('admin/update_admin', [App\Http\Controllers\AdminController::class, 'admin_update']);
Route::get('admin/change-password/', [App\Http\Controllers\AdminController::class, 'change_password']);
Route::post('admin/update_password/', [App\Http\Controllers\AdminController::class, 'update_password']);
Route::post('admin/add/review', [App\Http\Controllers\DoctorController::class, 'AddReview']);


//                            Hospital Route 

Route::get('admin/hospital', [App\Http\Controllers\HospitalController::class, 'ShowHospital']);
Route::get('admin/hospital/add-new', [App\Http\Controllers\HospitalController::class, 'AddHospital']);
Route::post('admin/add/hospital', [App\Http\Controllers\HospitalController::class, 'StoreHospital']);
Route::post('admin/delete/hospital', [App\Http\Controllers\HospitalController::class, 'DeleteHospital']);
Route::get('admin/edit/hospital/{id}', [App\Http\Controllers\HospitalController::class, 'EditHospital']);
Route::post('admin/update/hospital', [App\Http\Controllers\HospitalController::class, 'UpdateHospital']);
Route::get('hospital', [App\Http\Controllers\HospitalController::class, 'IndexHospital']);
Route::post('admin/add/hospital/review', [App\Http\Controllers\HospitalController::class, 'AddHospitalReview']);
Route::get('hospital/details/{file}', [App\Http\Controllers\HospitalController::class, 'ShowHospitalDetail'])->name('hospital.detail');


//                            Doctor Route 

Route::get('/doctors', [App\Http\Controllers\DoctorController::class, 'DoctorPage']);
Route::get('admin/active/{id}', [App\Http\Controllers\DoctorController::class, 'doctor_active']);
Route::get('admin/inactive/{id}', [App\Http\Controllers\DoctorController::class, 'doctor_inactive']);
Route::post('admin/delete_doctor', [App\Http\Controllers\DoctorController::class, 'doctor_delete']);
Route::get('admin/doctor/edit/{id}', [App\Http\Controllers\DoctorController::class, 'edit_doctor']);
Route::post('admin/update-doctor', [App\Http\Controllers\DoctorController::class, 'update_doctor']);
Route::get('/admin/doctors' , [App\Http\Controllers\DoctorController::class, 'showdoctoradmin']);
Route::get('/doctor-detail/{id}' , [App\Http\Controllers\DoctorController::class, 'doctor_detail_show']);
Route::get('/admin/doctor/add-new', [App\Http\Controllers\DoctorController::class, 'add_doctor_page']);
Route::post('admin/add_new_doctor', [App\Http\Controllers\DoctorController::class, 'doctor_add']);
