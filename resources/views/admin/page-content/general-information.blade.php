@extends('admin.layouts.main-layout')
@section('title','General Information')
@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	    <!--begin::Entry-->
	    <div class="d-flex flex-column-fluid">
	        <!--begin::Container-->
	        <div class=" container ">
	            <div class="row">
	            	<div class="col-md-7">
	            		<div class="card card-custom">
	            			<div class="card-header flex-wrap border-0 pt-6 pb-0">
							    <div class="card-title">
							        <h3 class="card-label">
							            Company Information
							        </h3>
							    </div>
							</div>
							<div class="card-body">
								<div class="row">
								    <div class="col-md-12">
								        <div class="form-group">
								            <label class="lable-control">Company Title</label>
								            <input type="text" class="form-control input-lg" name="name">
								        </div>
								    </div>
								    <div class="col-md-6">
								        <div class="form-group">
								            <label class="lable-control">Logo</label>
								            <input type="file" class="form-control input-lg" name="name">
								        </div>
								    </div>
								    <div class="col-md-6">
								        <div class="form-group">
								            <label class="lable-control">FavIcon</label>
								            <input type="file" class="form-control input-lg" name="name">
								        </div>
								    </div>
								    <div class="col-md-12">
								        <div class="form-group">
								            <label class="lable-control">Short Description</label>
								            <textarea class="form-control" rows="5"></textarea>
								        </div>
								    </div>
								    <div class="col-md-12">
								    	<button class="btn mt-3 btn-primary">Save Changes</button>
								    </div>
								</div>
							</div>
	            		</div>
	            	</div>
	            	<div class="col-md-5">
	            		<div class="card card-custom">
	            			<div class="card-header flex-wrap border-0 pt-6 pb-0">
							    <div class="card-title">
							        <h3 class="card-label">
							            Social Links
							        </h3>
							    </div>
							</div>
							<div class="card-body">
								<div class="row">
								    <div class="col-md-12">
								        <div class="form-group">
								            <label class="lable-control">Facebook</label>
								            <input type="text" class="form-control input-lg" name="name">
								        </div>
								    </div>
								    <div class="col-md-12">
								        <div class="form-group">
								            <label class="lable-control">Instagram</label>
								            <input type="text" class="form-control input-lg" name="name">
								        </div>
								    </div>
								    <div class="col-md-12">
								        <div class="form-group">
								            <label class="lable-control">Twitter</label>
								            <input type="text" class="form-control input-lg" name="name">
								        </div>
								    </div>
								    <div class="col-md-12">
								        <div class="form-group">
								            <label class="lable-control">Youtube</label>
								            <input type="text" class="form-control input-lg" name="name">
								        </div>
								    </div>
								    <div class="col-md-12">
								    	<button class="btn mt-3 btn-primary">Save Changes</button>
								    </div>
								</div>
							</div>
	            		</div>
	            	</div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection