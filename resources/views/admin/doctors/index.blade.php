@extends('admin.layouts.main-layout')
@section('title','Manage doctors')
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
                            All doctors
                            <span class="text-muted pt-2 font-size-sm d-block">Find all doctors in the list below; use the filters to find what you want.</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="{{url('admin/doctor/add-new')}}" class="btn btn-primary font-weight-bolder" >
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
                            Add New Doctor
                        </a>
                        <!--end::Button-->
                    </div>
                </div>

                @if(session()->has('msg'))
                <div class="alert alert-success">
                   {!! session('msg') !!}
                </div>
            @endif
            
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable">
                                <!--begin: Datatable-->
                                <table id="example" class="table table-separate table-head-custom table-checkable">
                                    <thead>
                                        <tr>
                                            <th>Doctor Name/Email</th>
                                            <th>Phone Number</th>
                                            <th>Country</th>
                                            <th>Education</th>
                                            <th>Specializations</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($doctor_info as $info)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-dark">
                                                        <div class="symbol-label font-size-h5">H</div>
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">{{$info->name}}</span>
                                                        <a href="#" class="text-muted text-hover-primary">{{$info->email}}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$info->phone}}</td>
                                            @foreach($country as $c)
                                            @if($c->id == $info->country )
                                            <td>{{$c->country}}</td>
                                            @endif
                                            @endforeach
                                            <td>{{$info->education}}</td>
                                            @if($category)
                                            @foreach($category as $cat)
                                            @if($cat->id == $info->department)
                                            <td>{{$cat->category_name}}</td>
                                            @endif
                                            @endforeach
                                            @endif

                                            <td>
                                                @if($info->status == 1)
                                                <span class="label label-lg font-weight-bold label-light-success label-inline">Active</span>
                                                @endif
                                                @if($info->status == 0)
                                                <span class="label label-lg font-weight-bold label-light-danger label-inline">Disable</span>
                                                @endif
                                            </td>
                                            <td nowrap="">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <ul class="nav nav-hoverable flex-column">


                                                            @if($info->status == 1)
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{url('admin/inactive/'.$info->id)}}">Disable</span></a>
                                                            </li>
                                                            @endif
                                                            @if($info->status == 0)
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{url('admin/active/'.$info->id)}}">Activate</span></a>
                                                            </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a  href="{{url('admin/doctor/edit/'.$info->id)}}" class="btn btn-sm btn-clean btn-icon"  title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon delete_doctor" data-id="{{$info->id}}" title="Delete"> <i class="la la-trash"></i> </a>
                                                <a href="#" data-target="#reviewModal" class="btn btn-sm btn-clean btn-icon add_review" data-toggle="modal" data-id="{{$info->id}}" title="Add Review"><i class="fa fa-star" aria-hidden="true"></i></a>

                                            </td>
                                        </tr>
                                     @endforeach
                                        {{-- <tr>
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
                                            <td>+923407712693</td>
                                            <td>Pakistan</td>
                                            <td>MBBS</td>
                                            
                                            <td>Cardiology</td>
                                            <td>
                                                <span class="label label-lg font-weight-bold label-light-warning label-inline">Disabled</span>
                                            </td>
                                            <td nowrap="">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <ul class="nav nav-hoverable flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Disable</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Activate</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a data-toggle="modal" data-target="#exampleModalScrollable" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr> --}}
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




<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you Sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                Do you want to delete that record ?
            </div>
                <form action="{{ url('admin/delete_doctor') }}" method="post">
                @csrf
                    <input type="hidden" name="delete_id" id="delete_id" >
                  
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger font-weight-bold">Yes, Delete it</button>
            </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form action="{{ url('admin/add/review') }}" method="post">
                @csrf
            <input type="hidden" name="id" id="id" >

            <div class="modal-body">
                <div class="form-group">
                    <label for="" class="col-form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="recipient-name">
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Rating</label>
                    <select class="form-control" name="rating" id="exampleFormControlSelect1">
                <option selected>Choose...</option>
                    <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Comment:</label>
                    <textarea class="form-control" rows="3" name="comment" id="message-text"></textarea>
                  </div>            
                </div>

                  
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger font-weight-bold">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>



    $('.delete_doctor').on('click', function () {

    var delete_id = $(this).data('id');
    $('#delete_id').val(delete_id);

    });

    $('.add_review').on('click', function () {

var id = $(this).data('id');
$('#id').val(id);

});


</script>

@endsection