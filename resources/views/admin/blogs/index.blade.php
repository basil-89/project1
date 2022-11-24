@extends('admin.layouts.main-layout')
@section('title','Blogs')
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
                            Blogs
                            <span class="text-muted pt-2 font-size-sm d-block">See all news-letters</span>
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
                                            <th>Title</th>
                                            <th>Slug</th>
                                            <th>Category</th>
                                            <th>Dated</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)">
                                                	Something goes here
                                                </a>
                                            </td>
                                            <td>https://www.domain.com/blog-title</td>
                                            <td>Travel</td>
                                            <td>15 Jun 2022</td>
                                            
                                            <td>
                                                <span class="label label-lg font-weight-bold label-light-success label-inline">Published</span>
                                            </td>
                                            <td nowrap="">
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)">
                                                	Something goes here
                                                </a>
                                            </td>
                                            <td>https://www.domain.com/blog-title</td>
                                            <td>Travel</td>
                                            <td>15 Jun 2022</td>
                                            
                                            <td>
                                                <span class="label label-lg font-weight-bold label-light-success label-inline">Published</span>
                                            </td>
                                            <td nowrap="">
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)">
                                                	Something goes here
                                                </a>
                                            </td>
                                            <td>https://www.domain.com/blog-title</td>
                                            <td>Travel</td>
                                            <td>15 Jun 2022</td>
                                            
                                            <td>
                                                <span class="label label-lg font-weight-bold label-light-warning label-inline">not-published</span>
                                            </td>
                                            <td nowrap="">
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)">
                                                	Something goes here
                                                </a>
                                            </td>
                                            <td>https://www.domain.com/blog-title</td>
                                            <td>Travel</td>
                                            <td>15 Jun 2022</td>
                                            
                                            <td>
                                                <span class="label label-lg font-weight-bold label-light-success label-inline">Published</span>
                                            </td>
                                            <td nowrap="">
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)">
                                                	Something goes here
                                                </a>
                                            </td>
                                            <td>https://www.domain.com/blog-title</td>
                                            <td>Travel</td>
                                            <td>15 Jun 2022</td>
                                            
                                            <td>
                                                <span class="label label-lg font-weight-bold label-light-success label-inline">Published</span>
                                            </td>
                                            <td nowrap="">
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="javascript:void(0)">
                                                	Something goes here
                                                </a>
                                            </td>
                                            <td>https://www.domain.com/blog-title</td>
                                            <td>Travel</td>
                                            <td>15 Jun 2022</td>
                                            
                                            <td>
                                                <span class="label label-lg font-weight-bold label-light-warning label-inline">not-published</span>
                                            </td>
                                            <td nowrap="">
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
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