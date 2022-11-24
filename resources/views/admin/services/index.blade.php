@extends('admin.layouts.main-layout')
@section('title','Categories')
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
                            Services
                            <span class="text-muted pt-2 font-size-sm d-block">Find all categories bellow</span>
                        </h3>
                    </div>

                    @if(session()->has('msg'))
                    <div class="alert alert-success">
                       {!! session('msg') !!}
                    </div>
                @endif
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable">
                                <!--begin: Datatable-->
                                <table id="example" class="table table-separate table-head-custom table-checkable">
                                    <thead>
                                        <tr>
                                            <th>Category/Type</th>
                                            <th>Short Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $data)
                                        <tr>
                                            <td>
                                                {{$data->service_name}}
                                            </td>
                                            <td>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            </td>
                                            <td nowrap="">
                                                
                                                <a href="#edit" data-toggle="modal" data-id="{{$data->id}}" class="btn btn-sm btn-clean btn-icon edit_serv" data-target="#edit" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-id="{{$data->id}}" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon delete_serv" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        {{-- <tr>
                                            <td>
                                                Modern Villas
                                            </td>
                                            <td>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            </td>
                                            <td nowrap="">
                                                
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Luxurious Retreat
                                            </td>
                                            <td>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            </td>
                                            <td nowrap="">
                                                
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Island Ambiance
                                            </td>
                                            <td>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            </td>
                                            <td nowrap="">
                                                
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Modern Villas
                                            </td>
                                            <td>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            </td>
                                            <td nowrap="">
                                                
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                                <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Luxurious Retreat
                                            </td>
                                            <td>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            </td>
                                            <td nowrap="">
                                                
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
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

<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Add New Service <br>
                    
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
                    <form  action="{{ url('admin/add-service') }}" method="post">
                    @csrf

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Service Title</label>
                            <input type="text" class="form-control input-lg" name="service_name[]" required>
                        </div>
                    </div>

                    <div id="newRow"></div>
                    <button id="addRow" type="button" class="btn btn-info ml-5">Add Row</button>
        
                    {{-- <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Choose Image</label>
                            <input type="file" class="form-control input-lg" name="">
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Put small description</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                    </div>                     --}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</form>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Update Service <br>
                    
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
                    <form  action="{{ url('admin/update-service') }}" method="post">
                    @csrf

                    <input type="hidden" name="edit_id" id="edit_id" >

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Service Title</label>
                            <input type="text" class="form-control input-lg" id="service_name" name="service" required>
                        </div>
                    </div>
                    {{-- <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Choose Image</label>
                            <input type="file" class="form-control input-lg" name="">
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Put small description</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                    </div>                     --}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</form>

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
                <form action="{{ url('admin/delete_service') }}" method="post">
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>

$("#addRow").click(function () {
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="service_name[]" class="form-control m-input ml-5" placeholder="Enter" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger mr-2">Remove</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
    });

    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });


    $('.edit_serv').on('click', function () {

var edit_id = $(this).data('id');

var urll= "{{url('service-edit/')}}/"+ edit_id;
$.get(urll, function (data) {


$('#edit').show();

$('#edit_id').val(data.id);
$('#service_name').val(data.service_name);



});
});

$('.delete_serv').on('click', function () {

var delete_id = $(this).data('id');
$('#delete_id').val(delete_id);

});


</script>


@endsection