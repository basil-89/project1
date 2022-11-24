@extends('admin.layouts.main-layout')
@section('title','Bookings')
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
                            Bookings
                            <span class="text-muted pt-2 font-size-sm d-block">See all bookings</span>
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
                                            <th>Username</th>
                                            <th>Check-In</th>
                                            <th>Check-Out</th>
                                            <th>Nights</th>
                                            <th>Guests</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-dark">
                                                        <div class="symbol-label font-size-h5">H</div>
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Humbert Bresnen</span>
                                                        <a href="#" class="text-muted text-hover-primary">example@gmail.com</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>12 Jun 2022</td>
                                            <td>15 Jun 2022</td>
                                            <td>4</td>
                                            <td>$900</td>
                                            <td>4</td>
                                            <td>
                                                <span class="label label-lg font-weight-bold label-light-success label-inline">Approved</span>
                                            </td>
                                            <td nowrap="">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <ul class="nav nav-hoverable flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Pending</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Approved</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Decline</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-dark">
                                                        <div class="symbol-label font-size-h5">H</div>
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Humbert Bresnen</span>
                                                        <a href="#" class="text-muted text-hover-primary">example@gmail.com</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>12 Jun 2022</td>
                                            <td>15 Jun 2022</td>
                                            <td>4</td>
                                            <td>$900</td>
                                            <td>4</td>
                                            <td>
                                                <span class="label label-lg font-weight-bold label-light-success label-inline">Approved</span>
                                            </td>
                                            <td nowrap="">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <ul class="nav nav-hoverable flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Pending</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Approved</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Decline</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-dark">
                                                        <div class="symbol-label font-size-h5">H</div>
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Humbert Bresnen</span>
                                                        <a href="#" class="text-muted text-hover-primary">example@gmail.com</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>12 Jun 2022</td>
                                            <td>15 Jun 2022</td>
                                            <td>4</td>
                                            <td>$900</td>
                                            <td>4</td>
                                            <td>
                                                <span class="label label-lg font-weight-bold label-light-success label-inline">Approved</span>
                                            </td>
                                            <td nowrap="">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <ul class="nav nav-hoverable flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Pending</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Approved</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Decline</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-dark">
                                                        <div class="symbol-label font-size-h5">H</div>
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Humbert Bresnen</span>
                                                        <a href="#" class="text-muted text-hover-primary">example@gmail.com</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>12 Jun 2022</td>
                                            <td>15 Jun 2022</td>
                                            <td>4</td>
                                            <td>$900</td>
                                            <td>4</td>
                                            <td>
                                                <span class="label label-lg font-weight-bold label-light-success label-inline">Approved</span>
                                            </td>
                                            <td nowrap="">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <ul class="nav nav-hoverable flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Pending</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Approved</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Decline</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
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