@extends('admin.layouts.main-layout')
@section('title','Add Doctor')
@section('content')
	<!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <div class="card card-custom">
                <div class="card-body p-0">
                    <!--begin: Wizard-->
                    <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="step-first" data-wizard-clickable="true">
                        <!--begin: Wizard Nav-->
                        <div class="wizard-nav">
                            <div class="wizard-steps px-8 py-8 px-lg-15 py-lg-3">
                                <!--begin::Wizard Step 1 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                            <span>1.</span> Personal Info
                                        </h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 1 Nav-->
                                <!--begin::Wizard Step 2 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                            <span>2.</span> Profession Info
                                        </h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                            <span>3.</span> Services
                                        </h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 3 Nav-->
                                <!--begin::Wizard Step 4 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                            <span>4.</span> Q&A
                                        </h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 4 Nav-->
                                <!--begin::Wizard Step 5 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                            <span>5</span> Review and Submit
                                        </h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 5 Nav-->
                            </div>
                        </div>

     @if(session()->has('msg'))
    <div class="alert alert-success">
       {!! session('msg') !!}
    </div>
@endif

                        <!--end: Wizard Nav-->
                        <!--begin: Wizard Body-->
                        <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                            <div class="col-xl-12 col-xxl-7">
                                <!--begin: Wizard Form-->
                                <form class="form" id="kt_form" method="post" action="{{url('admin/update-doctor')}}" enctype="multipart/form-data">
                                   @csrf
                                   <input type="hidden"  value="{{$doctor->id}}"  name="id" />

                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                        <h4 class="mb-10 font-weight-bold text-dark">Enter basic details</h4>
                                        <div class="row">
                                            <div class="col-xl-6">
                                            	<!--begin::Input-->
		                                        <div class="form-group">
		                                            <label>Full name</label>
		                                            <input type="text" class="form-control" value="{{$doctor->name}}" required name="name" />
		                                        </div>
		                                        <!--end::Input-->
                                            </div>
                                            <div class="col-xl-6">
                                            	<!--begin::Input-->
		                                        <div class="form-group">
		                                            <label>Email Address</label>
		                                            <input type="email" class="form-control" required value="{{$doctor->email}}" name="email" />
		                                        </div>
		                                        <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Personal Phone number</label>
                                                    <input type="tel" class="form-control"  value="{{$doctor->mobile}}" name="mobile" />
                                                    
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Work Phone number</label>
                                                    <input type="tel" class="form-control" value="{{$doctor->phone}}"  required name="phone" />
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-xl-6">

                                        <div class="form-group">
                                                    <label>Joining Date</label>
                                <input type="date" class="form-control" value="{{$doctor->joined}}"  required  name="date" />
                                                </div>

                                                <!--begin::Select-->
                                                <!--end::Select-->
                                            
                                            </div>
                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Website</label>
                                <input type="text" class="form-control" value="{{$doctor->web}}" required name="web" />
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-xl-12">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                <label>About Me</label>
                          <textarea class="form-control"  name="info" value="" id="exampleFormControlTextarea1" rows="3">{{$doctor->detail}}</textarea>

                                                </div>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="mb-10 font-weight-bold text-dark">Enter Profession Information</h4>
                                        <div class="row">
                                        	<div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Specialization</label>
                                                    <input type="text" required class="form-control" value="{{$doctor->specializations}}" name="specialization" />
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Department</label>
                                                    <select name="department" required class="form-control">
                                <option value="{{$category_name->id}}">{{$category_name->category_name}}</option>
                                @foreach($category as $cat)
                                <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                @endforeach
                                                        </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>

                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Medical Registration #</label>
                                                    <input type="text" required class="form-control" value="{{$doctor->registrations}}" name="reg" />
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Years of experience</label>
                                                    <input type="text" required class="form-control" value="{{$doctor->experience}}" name="exp" />
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-12">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Membership</label>
                                                    <input type="text" class="form-control" required value="{{$doctor->memberships}}" name="member" />
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-12">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Education</label>
                                                    <input type="text" class="form-control" value="{{$doctor->education }}" name="education" />
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="mb-10 font-weight-bold text-dark">Choose Services</h4>
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">Multi Select</label>
                                            <div class=" col-lg-4 col-md-9 col-sm-12">
                                                <select class="form-control" id="kt_select2_3" name="param[]" multiple="multiple">
                                        @foreach($services_name as $serv)              
                                    <option value="{{$serv->id}}" selected>{{$serv->service_name}}</option>
                                    @endforeach

                                @foreach($services as $service)
                                <option value="{{$service->id}}">{{$service->service_name}}</option>
                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 3-->
                                    <!--begin: Wizard Step 4-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="mb-10 font-weight-bold text-dark">Setup Your Delivery Location</h4>
                                        <div class="my-5">
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Address Line</label>
                                                <input type="text" class="form-control" required  name="locaddress1" placeholder="Address Line 1" value="{{$doctor->address}}" />
                                                <span class="form-text text-muted">Please enter your Address.</span>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="hidden"  name="oldimage" value="{{$doctor->image}}"/>
                                                <img src="{{asset('/assets/img/doctors/'.$doctor->image)}}" class="w-25" />
                                                <input type="file" class="form-control"  name="image" placeholder="image" />
                                                <span class="form-text text-muted">Please enter your Address.</span>
                                            </div>
                                            <!--end::Input-->
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    {{-- <div class="form-group">
                                                        <label>Postcode</label>
                                                        <input type="text" class="form-control" value="demo-data" name="locpostcode" placeholder="Postcode" value="3072" />
                                                        <span class="form-text text-muted">Please enter your Postcode.</span>
                                                    </div> --}}
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-12">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Country</label>

                                                 <select name="loccountry" id="country" class="form-control" value="demo-data">
                                <option value="{{$country_name->id}}">{{$country_name->country}}</option>
                                @foreach($country as $c_name)
                                <option value="{{$c_name->id}}">{{$c_name->country}}</option>
                                @endforeach
                                                        </select>

                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>State</label>
                                                <select name="locstate" id="state" required class="form-control" value="">
                                                    <option value="{{$state->id}}">{{$state->state_name}}</option>

                                                    
                                                        </select>

                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label>city</label>
                                                        <select name="loccity" id="city" required class="form-control" value="demo-data">
                                                <option value="{{$city->id}}">{{$city->city_name}}</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Select-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 4-->
                                    <!--begin: Wizard Step 5-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Section-->
                                        {{-- <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4> --}}
                                        {{-- <h6 class="font-weight-bolder mb-3">
                                            Current Address:
                                        </h6> --}}
                                        <div class="text-dark-50 line-height-lg">
                                            {{-- <div>Address Line 1</div>
                                            <div>Address Line 2</div>
                                            <div>Melbourne 3000, VIC, Australia</div> --}}
                                        </div>
                                        <div class="separator separator-dashed my-5"></div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <h6 class="font-weight-bolder mb-3">
                                            {{-- Delivery Details: --}}
                                        </h6>
                                        <div class="text-dark-50 line-height-lg">
                                            {{-- <div>Package: Complete Workstation (Monitor, Computer, Keyboard & Mouse)</div>
                                            <div>Weight: 25kg</div>
                                            <div>Dimensions: 110cm (w) x 90cm (h) x 150cm (L)</div> --}}
                                        </div>
                                        <div class="separator separator-dashed my-5"></div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        {{-- <h6 class="font-weight-bolder mb-3">
                                            Delivery Service Type:
                                        </h6> --}}
                                        <div class="text-dark-50 line-height-lg">
                                            {{-- <div>Overnight Delivery with Regular Packaging</div>
                                            <div>Preferred Morning (8:00AM - 11:00AM) Delivery</div> --}}
                                        </div>
                                        <div class="separator separator-dashed my-5"></div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        {{-- <h6 class="font-weight-bolder mb-3">
                                            Delivery Address:
                                        </h6> --}}
                                        <div class="text-dark-50 line-height-lg">
                                            {{-- <div>Address Line 1</div>
                                            <div>Address Line 2</div>
                                            <div>Preston 3072, VIC, Australia</div> --}}
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end: Wizard Step 5-->
                                    <!--begin: Wizard Actions-->
                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                        <div class="mr-2">
                                            <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">
                                                Previous
                                            </button>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-submit">
                                                Submit
                                            </button>
                                            <button type="button" class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </form>
                                <!--end: Wizard Form-->
                            </div>
                        </div>
                        <!--end: Wizard Body-->
                    </div>
                    <!--end: Wizard-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
            $('#country').on('change', function() {
               var categoryID = $(this).val();

               if(categoryID) {
                   $.ajax({
                       url: '/getCourse/'+categoryID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#state').empty();
                            $('#state').append('<option hidden>Choose State</option>'); 
                            $.each(data, function(key, course){
                                $('select[name="locstate"]').append('<option value="'+ course.id +'">' + course.state_name+ '</option>');
                            });
                        }else{
                            $('#state').empty();
                        }
                     }
                   });
               }else{
                 $('#state').empty();
               }
            });
            });

                        $(document).ready(function() {
            $('#state').on('change', function() {
               var cityID = $(this).val();

               if(cityID) {
                   $.ajax({
                       url: '/getCity/'+cityID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#city').empty();
                            $('#city').append('<option hidden>Choose city</option>'); 
                            $.each(data, function(key, city){
                                $('select[name="loccity"]').append('<option value="'+ city.id +'">' + city.city_name+ '</option>');
                            });
                        }else{
                            $('#city').empty();
                        }
                     }
                   });
               }else{
                 $('#city').empty();
               }
            });
            });


            
        </script>

@endsection