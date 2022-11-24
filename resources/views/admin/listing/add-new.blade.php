@extends('admin.layouts.main-layout')
@section('title','Add Listing')
@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom">
                <div class="card-body p-0">
                    <!--begin: Wizard-->
                    <div class="wizard wizard-2" id="kt_wizard_v2" data-wizard-state="step-first" data-wizard-clickable="false">
                        <!--begin: Wizard Nav-->
                        <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                            <!--begin::Wizard Step 1 Nav-->
                            <div class="wizard-steps">
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-wrapper">
                                    	<div class="wizard-icon">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
                                                        <path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon--></span> </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Basic Details
                                            </h3>
                                            <div class="wizard-desc">
                                                Put all basic information
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 1 Nav-->
                                <!--begin::Wizard Step 2 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                    	<div class="wizard-icon">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Position.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M19,11 L21,11 C21.5522847,11 22,11.4477153 22,12 C22,12.5522847 21.5522847,13 21,13 L19,13 C18.4477153,13 18,12.5522847 18,12 C18,11.4477153 18.4477153,11 19,11 Z M3,11 L5,11 C5.55228475,11 6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L3,13 C2.44771525,13 2,12.5522847 2,12 C2,11.4477153 2.44771525,11 3,11 Z M12,2 C12.5522847,2 13,2.44771525 13,3 L13,5 C13,5.55228475 12.5522847,6 12,6 C11.4477153,6 11,5.55228475 11,5 L11,3 C11,2.44771525 11.4477153,2 12,2 Z M12,18 C12.5522847,18 13,18.4477153 13,19 L13,21 C13,21.5522847 12.5522847,22 12,22 C11.4477153,22 11,21.5522847 11,21 L11,19 C11,18.4477153 11.4477153,18 12,18 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="2" />
                                                        <path d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675 8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z" fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon--></span> </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Amenities
                                            </h3>
                                            <div class="wizard-desc">
                                                Choose the facilities
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                    	<div class="wizard-icon">
	                                        <span class="svg-icon svg-icon-2x">
	                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Compass.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
	                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	                                                    <rect x="0" y="0" width="24" height="24" />
	                                                    <path d="M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z M14.1654881,7.35483745 L9.61055177,10.3622525 C9.47921741,10.4489666 9.39637436,10.592455 9.38694497,10.7495509 L9.05991526,16.197949 C9.04337012,16.4735952 9.25341309,16.7104632 9.52905936,16.7270083 C9.63705011,16.7334903 9.74423017,16.7047714 9.83451193,16.6451626 L14.3894482,13.6377475 C14.5207826,13.5510334 14.6036256,13.407545 14.613055,13.2504491 L14.9400847,7.80205104 C14.9566299,7.52640477 14.7465869,7.28953682 14.4709406,7.27299168 C14.3629499,7.26650974 14.2557698,7.29522855 14.1654881,7.35483745 Z" fill="#000000" />
	                                                </g>
	                                            </svg>
	                                            <!--end::Svg Icon--></span>
	                                        </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Location
                                            </h3>
                                            <div class="wizard-desc">
                                                Choose location from the map
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 3 Nav-->
                                <!--begin::Wizard Step 4 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                    	<div class="wizard-icon">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Position.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M19,11 L21,11 C21.5522847,11 22,11.4477153 22,12 C22,12.5522847 21.5522847,13 21,13 L19,13 C18.4477153,13 18,12.5522847 18,12 C18,11.4477153 18.4477153,11 19,11 Z M3,11 L5,11 C5.55228475,11 6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L3,13 C2.44771525,13 2,12.5522847 2,12 C2,11.4477153 2.44771525,11 3,11 Z M12,2 C12.5522847,2 13,2.44771525 13,3 L13,5 C13,5.55228475 12.5522847,6 12,6 C11.4477153,6 11,5.55228475 11,5 L11,3 C11,2.44771525 11.4477153,2 12,2 Z M12,18 C12.5522847,18 13,18.4477153 13,19 L13,21 C13,21.5522847 12.5522847,22 12,22 C11.4477153,22 11,21.5522847 11,21 L11,19 C11,18.4477153 11.4477153,18 12,18 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="2" />
                                                        <path d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675 8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z" fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon--></span> </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Things to know
                                            </h3>
                                            <div class="wizard-desc">
                                                Cancellation policy, Check-in time, Special Note
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 4 Nav-->
                                <!--begin::Wizard Step 5 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                    	<div class="wizard-icon">
	                                        <span class="svg-icon svg-icon-2x">
	                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Credit-card.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
	                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	                                                    <rect x="0" y="0" width="24" height="24" />
	                                                    <rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2" />
	                                                    <rect fill="#000000" x="2" y="8" width="20" height="3" />
	                                                    <rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1" />
	                                                </g>
	                                            </svg>
	                                            <!--end::Svg Icon--></span>
	                                    </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Prices & Rooms
                                            </h3>
                                            <div class="wizard-desc">
                                                Set per-night charges and others
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 5 Nav-->
                                <!--begin::Wizard Step 6 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-icon">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Like.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z"
                                                            fill="#000000"
                                                        />
                                                        <rect fill="#000000" opacity="0.3" x="2" y="9" width="5" height="11" rx="1" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Completed!
                                            </h3>
                                            <div class="wizard-desc">
                                                Review and Submit
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 6 Nav-->
                            </div>
                        </div>
                        <!--end: Wizard Nav-->
                        <!--begin: Wizard Body-->
                        <div class="wizard-body py-lg-20 px-lg-10">
                            <!--begin: Wizard Form-->
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                	<div class="">
                                    <form class="form" id="kt_form">
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">Enter your Account Details</h4>
                                            <!--begin::Input-->
                                            <div class="row" style="width:100%">
                                            	<div class="col-md-12">
                                            		<div class="form-group">
		                                                <label>Place Title</label>
		                                                <input type="text" class="form-control form-control-solid form-control-lg" name="fname" value="Beach House in collingwood" />
		                                            </div>
		                                            <!--end::Input-->
                                            	</div>
                                            	<div class="col-md-12">
                                            		<!--begin::Input-->
		                                            <div class="form-group">
		                                                <label>Location</label>
		                                                <input type="text" class="form-control form-control-solid form-control-lg" name="lname" value="Cape Town, South Africa" />
		                                            </div>
                                            	</div>
                                            	<div class="col-md-3">
                                            		<!--begin::Input-->
		                                            <div class="form-group">
		                                                <label>Guests</label>
		                                                <input type="text" class="form-control form-control-solid form-control-lg" name="lname" value="2" />
		                                            </div>
                                            	</div>
                                            	<div class="col-md-3">
                                            		<!--begin::Input-->
		                                            <div class="form-group">
		                                                <label>Beds</label>
		                                                <input type="text" class="form-control form-control-solid form-control-lg" name="lname" value="5" />
		                                            </div>
                                            	</div>
                                            	<div class="col-md-3">
                                            		<!--begin::Input-->
		                                            <div class="form-group">
		                                                <label>Baths</label>
		                                                <input type="text" class="form-control form-control-solid form-control-lg" name="lname" value="7" />
		                                            </div>
                                            	</div>
                                            	<div class="col-md-3">
                                            		<!--begin::Input-->
		                                            <div class="form-group">
		                                                <label>Space (Sq)</label>
		                                                <input type="text" class="form-control form-control-solid form-control-lg" name="lname" value="300" />
		                                            </div>
                                            	</div>
                                            	<div class="col-md-12">
                                            		<div class="dropzone dropzone-default mb-10" id="kt_dropzone_1">
														<div class="dropzone-msg dz-message needsclick">
														    <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														    <span class="dropzone-msg-desc">This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.</span>
														</div>
													</div>
                                            	</div>
                                            	<div class="col-md-12">
                                            		<div class="image-input image-input-outline" id="kt_image_1">
	                                                    <div class="image-input-wrapper" style="background-image: url('https://content.r9cdn.net/res/images/horizon/ui/seoCommon/destinationtiles/seo_hotels.jpg?v=aeb8c67f83d5b9fd53ca97055fc8402800bf3ce4&cluster=4')"></div>
	                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
	                                                        <i class="fa fa-pen icon-sm text-muted"></i>
	                                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
	                                                        <input type="hidden" name="profile_avatar_remove" />
	                                                    </label>
	                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
	                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
	                                                    </span>
	                                                </div>
                                            	</div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 1-->
                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Choose the facilities</h4>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Search Amenities</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" value="Amenities" name="address1" placeholder="Search"  />
                                                        
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 2-->
                                        <!--begin: Wizard Step 3-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Location</h4>
                                            <!--begin::Select-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Search Location</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" value="Amenities" name="address1" placeholder="Search"  />
                                                        
                                                    </div>
                                                    <!--end::Input-->
                                                </div>

                                                <div class="col-md-12">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2692.557351633025!2d-122.28642878449358!3d47.5569432791814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906a0e9112e871%3A0xf9e2f9d4f61a7a10!2sThe%20Royal%20Room%20Seattle!5e0!3m2!1sen!2s!4v1662449777716!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>

                                            </div>
                                            <!--end::Select-->
                                        </div>
                                        <!--end: Wizard Step 3-->
                                        <!--begin: Wizard Step 4-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Things to know</h4>
                                            <!--begin::Select-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Cancellation policy</label>
                                                        <textarea class="form-control form-control-solid form-control-lg" rows="4"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h5>Check-In</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="time" class="form-control form-control-solid form-control-lg" name="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="time" class="form-control form-control-solid form-control-lg" name="">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <h5>Check-out</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="time" class="form-control form-control-solid form-control-lg" name="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="time" class="form-control form-control-solid form-control-lg" name="">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Special Note</label>
                                                        <textarea name="kt-ckeditor-1" id="kt-ckeditor-1"></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                            
                                            <!--end::Select-->
                                        </div>
                                        <!--end: Wizard Step 4-->
                                        <!--begin: Wizard Step 5-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Prices & Rooms</h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Search Location</label>
                                                        <select class="form-control form-control-solid form-control-lg">
                                                            <option>Monday</option>
                                                            <option>Tuesday</option>
                                                            <option>Wednessday</option>
                                                            <option>Thursday</option>
                                                            <option>Friday</option>
                                                            <option>Saturday</option>
                                                            <option>Sunday</option>
                                                        </select>
                                                        
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Enter price</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Search Location</label>
                                                        <select class="form-control form-control-solid form-control-lg">
                                                            <option>Monday</option>
                                                            <option>Tuesday</option>
                                                            <option>Wednessday</option>
                                                            <option>Thursday</option>
                                                            <option>Friday</option>
                                                            <option>Saturday</option>
                                                            <option>Sunday</option>
                                                        </select>
                                                        
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Enter price</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Search Location</label>
                                                        <select class="form-control form-control-solid form-control-lg">
                                                            <option>Monday</option>
                                                            <option>Tuesday</option>
                                                            <option>Wednessday</option>
                                                            <option>Thursday</option>
                                                            <option>Friday</option>
                                                            <option>Saturday</option>
                                                            <option>Sunday</option>
                                                        </select>
                                                        
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Enter price</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Search Location</label>
                                                        <select class="form-control form-control-solid form-control-lg">
                                                            <option>Monday</option>
                                                            <option>Tuesday</option>
                                                            <option>Wednessday</option>
                                                            <option>Thursday</option>
                                                            <option>Friday</option>
                                                            <option>Saturday</option>
                                                            <option>Sunday</option>
                                                        </select>
                                                        
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Enter price</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Search Location</label>
                                                        <select class="form-control form-control-solid form-control-lg">
                                                            <option>Monday</option>
                                                            <option>Tuesday</option>
                                                            <option>Wednessday</option>
                                                            <option>Thursday</option>
                                                            <option>Friday</option>
                                                            <option>Saturday</option>
                                                            <option>Sunday</option>
                                                        </select>
                                                        
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Enter price</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Search Location</label>
                                                        <select class="form-control form-control-solid form-control-lg">
                                                            <option>Monday</option>
                                                            <option>Tuesday</option>
                                                            <option>Wednessday</option>
                                                            <option>Thursday</option>
                                                            <option>Friday</option>
                                                            <option>Saturday</option>
                                                            <option>Sunday</option>
                                                        </select>
                                                        
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Enter price</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Search Location</label>
                                                        <select class="form-control form-control-solid form-control-lg">
                                                            <option>Monday</option>
                                                            <option>Tuesday</option>
                                                            <option>Wednessday</option>
                                                            <option>Thursday</option>
                                                            <option>Friday</option>
                                                            <option>Saturday</option>
                                                            <option>Sunday</option>
                                                        </select>
                                                        
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Enter price</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Search Location</label>
                                                        <select class="form-control form-control-solid form-control-lg">
                                                            <option>Monday</option>
                                                            <option>Tuesday</option>
                                                            <option>Wednessday</option>
                                                            <option>Thursday</option>
                                                            <option>Friday</option>
                                                            <option>Saturday</option>
                                                            <option>Sunday</option>
                                                        </select>
                                                        
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Enter price</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 5-->
                                        <!--begin: Wizard Step 6-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Section-->
                                            <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>
                                            <h6 class="font-weight-bolder mb-3">
                                                Current Address:
                                            </h6>
                                            <div class="text-dark-50 line-height-lg">
                                                <div>Address Line 1</div>
                                                <div>Address Line 2</div>
                                                <div>Melbourne 3000, VIC, Australia</div>
                                            </div>
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <h6 class="font-weight-bolder mb-3">
                                                Delivery Details:
                                            </h6>
                                            <div class="text-dark-50 line-height-lg">
                                                <div>Package: Complete Workstation (Monitor, Computer, Keyboard & Mouse)</div>
                                                <div>Weight: 25kg</div>
                                                <div>Dimensions: 110cm (w) x 90cm (h) x 150cm (L)</div>
                                            </div>
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <h6 class="font-weight-bolder mb-3">
                                                Delivery Service Type:
                                            </h6>
                                            <div class="text-dark-50 line-height-lg">
                                                <div>Overnight Delivery with Regular Packaging</div>
                                                <div>Preferred Morning (8:00AM - 11:00AM) Delivery</div>
                                            </div>
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end::Section-->
                                            <!--begin::Section-->
                                            <h6 class="font-weight-bolder mb-3">
                                                Delivery Address:
                                            </h6>
                                            <div class="text-dark-50 line-height-lg">
                                                <div>Address Line 1</div>
                                                <div>Address Line 2</div>
                                                <div>Preston 3072, VIC, Australia</div>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end: Wizard Step 6-->
                                        <!--begin: Wizard Actions-->
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">
                                                    Previous
                                                </button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-submit">
                                                    Submit
                                                </button>
                                                <button type="button" class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                        <!--end: Wizard Actions-->
                                    </form>
                                </div>
                                </div>
                                <!--end: Wizard-->
                            </div>
                            <!--end: Wizard Form-->
                        </div>
                        <!--end: Wizard Body-->
                    </div>
                    <!--end: Wizard-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
</div>

@endsection