@extends('admin.layouts.main-layout')
@section('title','Add New Post')
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
			                            Add New Post
			                            <span class="text-muted pt-2 font-size-sm d-block">Fill all the details</span>
			                        </h3>
			                    </div>
			                </div>
			                <div class="card-body">
			                	<div class="row">
				                    <div class="col-md-12">
				                        <div class="form-group">
				                            <label class="lable-control">Post Title</label>
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
				                    	<div id="kt_quil_1" style="height: 325px">
								            
								        </div>
				                    </div>

				                </div>
			                </div>
			            </div>
			            <!--end::Card-->
	            	</div>

	            	<div class="col-md-4">
	            		<!--begin::Card-->
			            <div class="card card-custom mt-3">
			                <div class="card-header flex-wrap border-0 pt-6 pb-0">
			                    <div class="card-title">
			                        <h3 class="card-label">
			                            Choose Categories
			                            <span class="text-muted pt-2 font-size-sm d-block">You can choose multiple categories</span>
			                        </h3>
			                    </div>
			                </div>
			                <div class="card-body">
			                	<div class="row">
				                    <div class="col-md-12">
				                    	<div class="">
									        <label class="checkbox checkbox-lg mb-4">
									            <input type="checkbox" checked="checked" name="Checkboxes3_1"/>
									            <span class="mr-2"></span>
									            Category One
									        </label>
									        <label class="checkbox checkbox-lg mb-4">
									            <input type="checkbox" name="Checkboxes3_1"/>
									            <span class="mr-2"></span>
									            Category Two
									        </label>
									        <label class="checkbox checkbox-lg mb-4">
									            <input type="checkbox" name="Checkboxes3_1"/>
									            <span class="mr-2"></span>
									            Category Three
									        </label>
									    </div> 
				                    </div>
				                </div>
			                </div>
			            </div>
			            <!--end::Card-->

	            		<!--begin::Card-->
			            <div class="card card-custom mt-3">
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
				                            <label class="lable-control">Post Title</label>
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

	<script type="text/javascript">
		// Class definition
var KTQuilDemos = function() {

    // Private functions
    var demo1 = function() {
        var quill = new Quill('#kt_quil_1', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block']
                ]
            },
            placeholder: 'Type your text here...',
            theme: 'snow' // or 'bubble'
        });
    }

    return {
        // public functions
        init: function() {
            demo1();
            demo2();
        }
    };
}();

jQuery(document).ready(function() {
    KTQuilDemos.init();
});
	</script>

	
@endsection