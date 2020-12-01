@extends('admin.layouts.default')
@section('page_title','Add Incomecategory')
@section('content')
<div class="card-body card">
    <form  method="post" action="{{route('incomecategory.update',$incomecategory->id)}}" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
      <label>Name:</label>
      <input type="name" name="name" class="form-control form-control-solid" placeholder="Enter Name" value="{{$incomecategory->name}}"/>
      <span class="form-text text-muted">Please enter your Name</span>
      </div>
      <div class="form-group">
      <label>Description:</label>
      <input type="description" name="description" class="form-control form-control-solid" placeholder="Enter Description"  value="{{$incomecategory->description}}"/>
      <span class="form-text text-muted">Please enter your Name</span>
      </div>
      <div class="card-footer">
      <button type="submit" class="btn btn-primary mr-2">Update</button>
      <a href="{{route('incomecategory.view')}}">Cancel</a>
      </div>
    </form>
</div>

@endsection
