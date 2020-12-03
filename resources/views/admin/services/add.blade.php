@extends('admin.layouts.default')
@section('page_title','Add Services')
@section('content')
<div class="card-body card">
    <form class="form" action="{{route('store_service')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Service Name:</label>
            <input type="text" class="form-control form-control-solid @error('service_name')is-invalid @enderror" name="service_name" placeholder="Enter Service Name" />
            @error('service_name')
            <span class="invalid-feedback" role="alert">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Service Price:</label>
            <input type="number" class="form-control form-control-solid @error('service_price')is-invalid @enderror" name="service_price" placeholder="Enter Price" />
            @error('service_price')
            <span class="invalid-feedback" role="alert">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea name="service_description" id="" cols="30" rows="10" class="form-control form-control-solid"></textarea>
        </div>
        <div class="form-group">
            <label>Status:</label>

            <select name="service_status" class="form-control form-control-solid @error('service_status')is-invalid @enderror">
                <option value=" " disabled selected>Select Status</option>
                <option value="Available">Available</option>
                <option value="Not Available">Not Available</option>

            </select>
            @error('service_status')
            <span class="invalid-feedback" role="alert">{{$message}}</span>
            @enderror
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="{{route('view_services')}}" class="btn btn-primary mr-2">Back</a>
    </form>
</div>
@endsection