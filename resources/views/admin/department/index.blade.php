@extends('admin.layouts.default')
@section('page_title','View Department')
@section('content')
<div class="page-content-wrapper ">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <ol class="breadcrumb page-breadcrumb">
                <li class="flex"></li>
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="">Departments</a>&nbsp;
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">All Departments</li>
            </ol>
        </div>
    </div>
    <div class="page-content">
        {{--here--}}
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon">
                        <i class="flaticon2-gift text-primary"></i>
                    </span>
                    <h3 class="card-label">All Departments</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{route('add_department')}}" class="btn btn-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="9" cy="15" r="6" />
                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>Add Department</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table id="demo_table" class="display nowrap table" style="width:100%">
                    <thead class="table-bg">
                        <tr>
                            <th>Department ID</th>
                            <th>Department Name</th>
                            <th>Department Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($data as $data)
                        <tr class="odd gradeX">
                            <td>{{$data->id}}</td>
                            <td>{{$data->dep_name}}</td>
                            <td>{{$data->dep_description}}</td>
                            <td class="text-left">
                                <a href="{{route('edit_department',$data->id)}}">
                                    <i class="fa fa-paper-plane text-primary "></i>
                                </a>
                                <a href="javascript::" class="btn text-danger btn-sm deleteData" rel1="{{ route('delete_department', $data->id)}}"><span class="fa fa-trash"></span>
                                </a>

                            </td>
                        </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
    </div>
</div>
@endsection
@push('scritps')
<script type="text/javascript">
    $(document).ready(function() {

    });
</script>
@endpush