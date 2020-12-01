@extends('admin.layouts.default')
@section('page_title','Add Department')
@section('content')
<div class="card-body card">
    <form class="form" action="{{route('store_department')}}" method="post">
        @csrf

        <div class="form-group">
            <label>Department Name:</label>
            <input type="text" class="form-control form-control-solid" name="dep_name" placeholder="Enter Department Name" />
            <span class="form-text text-muted">Please enter department name</span>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea name="dep_description" id="" cols="30" rows="10" class="form-control form-control-solid"></textarea>
            <span class="form-text text-muted">Please enter department name</span>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
    </form>
</div>
@endsection