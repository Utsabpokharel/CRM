@extends('admin.layouts.default')
@section('page_title','Dashboard')
@section('content')
<!--begin::Card-->
  <p> Hello, <a href="{{route('profile.index')}}"><b>{{Auth::user()->name}} </b></a>!!! Welcome To Your Dashboard. </p>
<div class="row">
    <div class="card card-custom gutter-b col-md-3" style="background: #868629">
        <div class="card-body">
            <i class="fa fa-user"></i>
            <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{$user}}</div>
            <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Total Users</a>
        </div>
    </div>
    <div class="card card-custom gutter-b col-md-3" style="background: #62559e">
        <div class="card-body">
            <i class="fa fa-user"></i>
            <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{$staff}}</div>
            <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Total Staffs</a>
        </div>
    </div>
    <div class="card card-custom gutter-b col-md-3" style="background: #c55353">
        <div class="card-body">
            <i class="fa fa-user"></i>
            <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{$customer}}</div>
            <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Total Customers</a>
        </div>
    </div>
    <div class="card card-custom gutter-b col-md-3" style="background: #7a7861">
        <div class="card-body">
            <i class="fa fa-user"></i>
            <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{$vendor}}</div>
            <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Total Vendors</a>
        </div>
    </div>
</div>
@endsection
