@extends('admin.layouts.main-layout')
@section('title','Add New Page')
@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	    <!--begin::Entry-->
	    <div class="d-flex flex-column-fluid">
	        <!--begin::Container-->
	        <div class="container">
	            <div class="row">
	            	<div class="col-md-8">
	            		<!--begin::Card-->
			            <div class="card card-custom">
			                <div class="card-header flex-wrap border-0 pt-6 pb-0">
			                    <div class="card-title">
			                        <h3 class="card-label">
			                            Add New Page
			                            <span class="text-muted pt-2 font-size-sm d-block">Fill all the details</span>
			                        </h3>
			                    </div>
			                </div>
			                <div class="card-body">
			                	<div class="row">
				                    <div class="col-md-12">
				                        <div class="form-group">
				                            <label class="lable-control">Page Title</label>
				                            <input type="text" class="form-control input-lg" name="name">
				                        </div>
				                    </div>

				                    <div class="col-md-12">
				                        <div class="form-group">
				                            <label class="lable-control">Slug</label>
				                            <input type="text" class="form-control input-lg" name="name">
				                        </div>
				                    </div>

				                    <div class="col-md-12">
				                    	<textarea name="kt-ckeditor-1" id="kt-ckeditor-1"></textarea>
				                    </div>

				                </div>
			                </div>
			            </div>
			            <!--end::Card-->
	            	</div>

	            	<div class="col-md-4">
	            		<!--begin::Card-->
			            <div class="card card-custom">
			                <div class="card-header flex-wrap border-0 pt-6 pb-0">
			                    <div class="card-title">
			                        <h3 class="card-label">
			                            SEO Settings
			                            <span class="text-muted pt-2 font-size-sm d-block">Manage meta settings</span>
			                        </h3>
			                    </div>
			                </div>
			                <div class="card-body">
			                	<div class="row">
				                    <div class="col-md-12">
				                        <div class="form-group">
				                            <label class="lable-control">Page Title</label>
				                            <input type="text" class="form-control input-lg" name="name">
				                        </div>
				                    </div>
				                    <div class="col-md-12">
				                    	<div class="form-group">
				                    		<label class="lable-control">Meta Description</label>
				                    		<textarea class="form-control" rows="5"></textarea>
				                    	</div>
				                    </div>
				                </div>
			                </div>
			            </div>
			            <!--end::Card-->

			            <button class="btn btn-primary btn-block mt-3">Submit Now</button>
	            	</div>
	            </div>
	        </div>
	        <!--end::Container-->
	    </div>
	    <!--end::Entry-->
	</div>

	
@endsection