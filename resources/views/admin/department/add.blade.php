@extends('admin.layouts.default')
@section('page_title','Add Department')
@section('content')
<div class="card-body card">
    <form class="form" action="{{route('store_department')}}" method="post">
        @csrf

        <div class="form-group">
            <label>Department Name:</label>
            <input type="text" class="form-control form-control-solid @error('dep_name') is-invalid @enderror" name="dep_name" placeholder="Enter Department Name" />
            @error('dep_name')
            <span class="invalid-feedback" role="alert"> {{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Description:</label>
            @error('dep_description')
            <span class="invalid-feedback" role="alert"> {{$message}}</span>
            @enderror
            <textarea name="dep_description" id="" cols="30" rows="10" class="form-control form-control-solid"></textarea>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="{{route('view_department')}}" class="btn btn-primary">Cancel</a>
    </form>
</div>
@endsection