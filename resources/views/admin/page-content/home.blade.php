@extends('admin.layouts.main-layout')
@section('title','Home Page Content')
@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <div class="row">
				<div class="col-md-10 mx-auto">
					<div class="row">
				        <div class="col-3">
				        	<div class="card">
				        		<div class="card-body p-7">
				        			<ul class="nav flex-column nav-pills">
						                <li class="nav-item mb-2">
						                    <a class="nav-link active" id="home-tab-5" data-toggle="tab" href="#home-5">
						                        <span class="nav-text">Slider</span>
						                    </a>
						                </li>
						                <li class="nav-item mb-2">
						                    <a class="nav-link" id="profile-tab-5" data-toggle="tab" href="#profile-5" aria-controls="profile">
						                        <span class="nav-text">How it works</span>
						                    </a>
						                </li>
						                <li class="nav-item">
						                    <a class="nav-link" id="contact-tab-5" data-toggle="tab" href="#contact-5" aria-controls="contact">
						                        <span class="nav-text">Contact Us</span>
						                    </a>
						                </li>
						                <li class="nav-item">
						                    <a class="nav-link" id="testimonials" data-toggle="tab" href="#testimonials-1" aria-controls="contact">
						                        <span class="nav-text">Testimonials</span>
						                    </a>
						                </li>
						            </ul>
				        		</div>
				        	</div>
				        </div>
				        <div class="col-9">
				        	<div class="tab-content" id="myTabContent5">
				                <div class="tab-pane fade show active" id="home-5" role="tabpanel" aria-labelledby="home-tab-5">
				                    <div class="card card-custom">
				                    	<div class="card-header flex-wrap border-0 pt-6 pb-0">
										    <div class="card-title">
										        <h3 class="card-label">
										            Change Slides
										            <span class="text-muted pt-2 font-size-sm d-block">Update the scrolling slides on the home page.</span>
										        </h3>
										    </div>
										    <div class="card-toolbar">
										        <!--begin::Button-->
										        <a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalScrollable">
										            <span class="svg-icon svg-icon-md">
										                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
										                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										                        <rect x="0" y="0" width="24" height="24"></rect>
										                        <circle fill="#000000" cx="9" cy="15" r="6"></circle>
										                        <path
										                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
										                            fill="#000000"
										                            opacity="0.3"
										                        ></path>
										                    </g>
										                </svg>
										                <!--end::Svg Icon-->
										            </span>
										            New Slide
										        </a>
										        <!--end::Button-->
										    </div>
										</div>
				                    	<div class="card-body">
				                    		<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample2">
												<div class="card">
													<div class="card-header" id="headingOne2">
														<div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
															Slide 1
														</div>
													</div>
													<div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
														<div class="card-body">
															<div class="row">
															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Slider Title</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>

															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Short Description</label>
															            <textarea class="form-control" rows="5"></textarea>
															        </div>
															    </div>
															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Text</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>
															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Link</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>

															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Text</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>
															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Link</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>
															    <div class="col-md-12">
															    	<div class="form-group">
															            <label class="lable-control">Update Banner Image</label>
															            <input type="file" class="form-control input-lg" name="name">
															        </div>
															    </div>
															</div>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingTwo2">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo2">
															Slide 2
														</div>
													</div>
													<div id="collapseTwo2" class="collapse"  data-parent="#accordionExample2">
														<div class="card-body">
															<div class="row">
															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Slider Title</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>

															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Short Description</label>
															            <textarea class="form-control" rows="5"></textarea>
															        </div>
															    </div>
															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Text</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>
															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Link</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>

															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Text</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>
															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Link</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>
															    <div class="col-md-12">
															    	<div class="form-group">
															            <label class="lable-control">Update Banner Image</label>
															            <input type="file" class="form-control input-lg" name="name">
															        </div>
															    </div>
															</div>
														</div>
													</div>
												</div>
												
											</div>
				                    	</div>
				                    </div>
				                </div>
				                <div class="tab-pane fade" id="profile-5" role="tabpanel" aria-labelledby="profile-tab-5">
				                    <div class="card card-custom">
				                    	<div class="card-header flex-wrap border-0 pt-6 pb-0">
										    <div class="card-title">
										        <h3 class="card-label">
										            How it works
										            <span class="text-muted pt-2 font-size-sm d-block">Update content of the 2nd section on home page</span>
										        </h3>
										    </div>
										</div>
				                    	<div class="card-body">
				                    		<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample3">
											    <div class="card">
											        <div class="card-header" id="headingOne3">
											            <div class="card-title" data-toggle="collapse" data-target="#collapseOne3">
											                Section 1
											            </div>
											        </div>
											        <div id="collapseOne3" class="collapse show" data-parent="#accordionExample3">
											            <div class="card-body">
											                <div class="row">
																<div class="col-md-12">
															    	<div class="form-group">
															            <label class="lable-control">Title</label>
															            <input type="text" class="form-control input-lg" value="" name="name">
															        </div>
															        <div class="col-md-12">
															        	<div class="form-group">
																            <label class="lable-control">Description</label>
																            <textarea class="form-control" rows="5"></textarea>
																        </div>
															        </div>
															    </div>
															</div>
											            </div>
											        </div>
											    </div>
											    <div class="card">
											        <div class="card-header" id="headingTwo3">
											            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo3">
											                Section 2
											            </div>
											        </div>
											        <div id="collapseTwo3" class="collapse" data-parent="#accordionExample3">
											            <div class="card-body">
											                <div class="row">
																<div class="col-md-12">
															    	<div class="form-group">
															            <label class="lable-control">Title</label>
															            <input type="text" class="form-control input-lg" value="" name="name">
															        </div>
															        <div class="col-md-12">
															        	<div class="form-group">
																            <label class="lable-control">Description</label>
																            <textarea class="form-control" rows="5"></textarea>
																        </div>
															        </div>
															    </div>
															</div>
											            </div>
											        </div>
											    </div>
											    <div class="card">
											        <div class="card-header" id="headingThree3">
											            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree3">
											                Section 3
											            </div>
											        </div>
											        <div id="collapseThree3" class="collapse" data-parent="#accordionExample3">
											            <div class="card-body">
											                <div class="row">
																<div class="col-md-12">
															    	<div class="form-group">
															            <label class="lable-control">Title</label>
															            <input type="text" class="form-control input-lg" value="" name="name">
															        </div>
															        <div class="col-md-12">
															        	<div class="form-group">
																            <label class="lable-control">Description</label>
																            <textarea class="form-control" rows="5"></textarea>
																        </div>
															        </div>
															    </div>
															</div>
											            </div>
											        </div>
											    </div>
											</div>
				                    	</div>
				                    </div>
				                </div>
				                <div class="tab-pane fade" id="contact-5" role="tabpanel" aria-labelledby="contact-tab-5">
				                    <div class="card card-custom">
				                    	<div class="card-header flex-wrap border-0 pt-6 pb-0">
										    <div class="card-title">
										        <h3 class="card-label">
										            Contact Us
										            <span class="text-muted pt-2 font-size-sm d-block">Update content of the "Get in Toch" section on home page</span>
										        </h3>
										    </div>
										</div>
										<div class="card-body">
											<div class="row">
									    <div class="col-md-12">
									        <div class="form-group">
									            <label class="lable-control">Location</label>
									            <input type="text" class="form-control input-lg" value="Cancun Mexico, Lorem ipsum dummy text" name="name">
									        </div>
									    </div>

									    <div class="col-md-12">
									        <div class="form-group">
									            <label class="lable-control">Email</label>
									            <input type="text" class="form-control input-lg" name="name">
									        </div>
									    </div>

									    <div class="col-md-12">
									        <div class="form-group">
									            <label class="lable-control">Phone number</label>
									            <input type="text" class="form-control input-lg" name="name">
									        </div>
									    </div>
									</div>
										</div>
									</div>
				                </div>
				                <div class="tab-pane fade" id="testimonials-1" role="tabpanel" aria-labelledby="testimonials">
				                    <div class="card card-custom">
				                    	<div class="card-header flex-wrap border-0 pt-6 pb-0">
										    <div class="card-title">
										        <h3 class="card-label">
										            Testimonials
										            <span class="text-muted pt-2 font-size-sm d-block">Update content of the "Client's" section on home page</span>
										        </h3>
										    </div>
										    <div class="card-toolbar">
										        <!--begin::Button-->
										        <a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalScrollable">
										            <span class="svg-icon svg-icon-md">
										                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
										                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										                        <rect x="0" y="0" width="24" height="24"></rect>
										                        <circle fill="#000000" cx="9" cy="15" r="6"></circle>
										                        <path
										                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
										                            fill="#000000"
										                            opacity="0.3"
										                        ></path>
										                    </g>
										                </svg>
										                <!--end::Svg Icon-->
										            </span>
										            New Record
										        </a>
										        <!--end::Button-->
										    </div>
										</div>
										<div class="card-body">
											<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample32">
											    <div class="card">
											        <div class="card-header" id="headingOne32">
											            <div class="card-title" data-toggle="collapse" data-target="#collapseOne32">
											                Testimonial 1
											            </div>
											        </div>
											        <div id="collapseOne32" class="collapse show" data-parent="#accordionExample32">
											            <div class="card-body">
											                <div class="row">
															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Client Name</label>
															            <input type="text" class="form-control input-lg"  name="name">
															        </div>
															    </div>

															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Location</label>
															            <input type="text" class="form-control input-lg" name="name">
															        </div>
															    </div>

															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Short Description</label>
															            <textarea class="form-control" rows="5"></textarea>
															        </div>
															    </div>
															</div>
											            </div>
											        </div>
											    </div>
											    <div class="card">
											        <div class="card-header" id="headingTwo32">
											            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo32">
											                Testimonial 2
											            </div>
											        </div>
											        <div id="collapseTwo32" class="collapse" data-parent="#accordionExample32">
											            <div class="card-body">
											                <div class="row">
															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Client Name</label>
															            <input type="text" class="form-control input-lg"  name="name">
															        </div>
															    </div>

															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Location</label>
															            <input type="text" class="form-control input-lg" name="name">
															        </div>
															    </div>

															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Short Description</label>
															            <textarea class="form-control" rows="5"></textarea>
															        </div>
															    </div>
															</div>
											            </div>
											        </div>
											    </div>
											    <div class="card">
											        <div class="card-header" id="headingThree32">
											            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree32">
											                Testimonial 3
											            </div>
											        </div>
											        <div id="collapseThree32" class="collapse" data-parent="#accordionExample32">
											            <div class="card-body">
											                <div class="row">
															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Client Name</label>
															            <input type="text" class="form-control input-lg"  name="name">
															        </div>
															    </div>

															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Location</label>
															            <input type="text" class="form-control input-lg" name="name">
															        </div>
															    </div>

															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Short Description</label>
															            <textarea class="form-control" rows="5"></textarea>
															        </div>
															    </div>
															</div>
											            </div>
											        </div>
											    </div>
											</div>
										</div>
									</div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection