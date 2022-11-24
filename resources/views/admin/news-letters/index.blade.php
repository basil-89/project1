@extends('admin.layouts.main-layout')
@section('title','News Letters')
@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	    <!--begin::Entry-->
	    <div class="d-flex flex-column-fluid">
	        <!--begin::Container-->
	        <div class="container">
	            <!--begin::Card-->
	            <div class="card card-custom">
	                <div class="card-header flex-wrap border-0 pt-6 pb-0">
	                    <div class="card-title">
	                        <h3 class="card-label">
	                            News Letters
	                            <span class="text-muted pt-2 font-size-sm d-block">Here are the emails we got</span>
	                        </h3>
	                    </div>
	                </div>
	                <div class="card-body">
	                    <div class="row">
	                        <div class="col-md-12">
	                            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable">
	                                <!--begin: Datatable-->
	                                <table id="example" class="table table-separate table-head-custom table-checkable">
	                                    <thead>
	                                        <tr>
	                                            <th>Email</th>
	                                            <th>Dated</th>
	                                            <th>Time</th>
	                                            <th>Actions</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                            <td>
	                                                shahzadiqbal792@gmail.com
	                                            </td>
	                                            <td>
	                                                12 Jun 2022
	                                            </td>
	                                            <td>
	                                                12:00 PM
	                                            </td>
	                                            <td nowrap="">
	                                                <a href="{{url('admin/client-query/detail')}}" class="btn btn-sm btn-clean btn-icon" title="View Detail"> <i class="la la-eye"></i> </a>
	                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
	                                            </td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                                <!--end: Datatable-->
	                            </div>
	                        </div>
	                    </div>

	                    
	                </div>
	            </div>
	            <!--end::Card-->
	        </div>
	        <!--end::Container-->
	    </div>
	    <!--end::Entry-->
	</div>
@endsection