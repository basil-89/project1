@extends('admin.layouts.main-layout')
@section('title','Query Detail')
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
			                            Client Query
			                            <span class="text-muted pt-2 font-size-sm d-block">12 Jun 2022, 12:00PM</span>
			                        </h3>
			                    </div>
			                </div>
			                <div class="card-body">
			                	<div class="row">
			                		<div class="col-md-12">
			                			<b>Name</b>
			                			<p>Shahzad Mughal</p>
			                		</div>

			                		<div class="col-md-12">
			                			<b>Email</b>
			                			<p>shahzadmughal@gmail.com</p>
			                		</div>

			                		<div class="col-md-12">
			                			<b>Detail</b>
			                			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			                			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			                			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			                			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			                			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			                			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			                			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			                			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			                			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			                			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
			                            Reply the Query
			                            <span class="text-muted pt-2 font-size-sm d-block">You can reply directly to this query</span>
			                        </h3>
			                    </div>
			                </div>
			                <div class="card-body">
			                	<textarea class="form-control" rows="8">
			                		
			                	</textarea>
			                	<button class="btn btn-primary mt-3">Submit Now</button>
			                </div>
			            </div>
			            <!--end::Card-->
	            	</div>
	            </div>
	        </div>
	        <!--end::Container-->
	    </div>
	    <!--end::Entry-->
	</div>
@endsection