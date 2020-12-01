@extends('admin.layouts.default')
@section('page_title','Add Services')
@section('content')
<div class="card-body card">
    <form class="form" action="{{route('store_service')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Service Name:</label>
            <input type="text" class="form-control form-control-solid" name="service_name" placeholder="Enter Department Name" />
            <span class="form-text text-muted">Please enter service name</span>
        </div>
        <div class="form-group">
            <label>Service Price:</label>
            <input type="number" class="form-control form-control-solid" name="service_price" placeholder="Enter Department Name" />
            <span class="form-text text-muted">Please enter service price</span>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea name="service_description" id="" cols="30" rows="10" class="form-control form-control-solid"></textarea>
            <span class="form-text text-muted">Please enter service description</span>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <select name="service_status" id="" class="form-control form-control-solid">
                <option value="Available">Available</option>
                <option value="Not Available">Not Available</option>
            </select>
            <span class="form-text text-muted">Please enter service description</span>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
    </form>
</div>
@endsection