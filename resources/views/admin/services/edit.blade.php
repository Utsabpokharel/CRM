@extends('admin.layouts.default')
@section('page_title','Edit Department')
@section('content')
<div class="card-body card">
    <form class="form" action="{{route('update_service',$data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label>Service ID:</label>
            <input type="text" class="form-control form-control-solid" name="service_name" value="{{$data->id}}" disabled />
            <span class="form-text text-muted">Please enter service name</span>
        </div>
        <div class="form-group">
            <label>Service Name:</label>
            <input type="text" class="form-control form-control-solid" name="service_name" value="{{$data->service_name}}" />
            <span class="form-text text-muted">Please enter service name</span>
        </div>
        <div class="form-group">
            <label>Service Price:</label>
            <input type="number" class="form-control form-control-solid" name="service_price" value="{{$data->service_price}}" />
            <span class="form-text text-muted">Please enter service price</span>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea name="service_description" id="" cols="30" rows="10" class="form-control form-control-solid">{{$data->service_description}}</textarea>
            <span class="form-text text-muted">Please enter service description</span>
        </div>
        <div class="form-group">
            <label>Status:</label>
            <select name="service_status" id="" class="form-control form-control-solid">
                <option value="Available" @if($data->service_status=="Available")selected @endif>Available</option>
                <option value="Not Available" @if($data->service_status=="Not Available")selected @endif>Not Available</option>
            </select>
            <span class="form-text text-muted">Please enter service description</span>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success mr-2">Update</button>
            <a href="{{route('view_services')}}" class="btn btn-primary mr-2">Back</a>
    </form>
</div>
@endsection
