@extends('admin.layouts.default')
@section('page_title','Add Expensescategory')
@section('content')
<style type="text/css">
  p{
    color:red;
  }
</style>
<div class="card-body card">
    <form class="form" method="post" action="{{route('expensescategory.store')}}" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
      <label>Name:</label>
       @error('name')
           <p>The Date is required.</p>
           @enderror
      <input type="name" name="name" class="form-control form-control-solid" placeholder="Enter Name"/>
      <span class="form-text text-muted">Please enter your Name</span>
      </div>
      <div class="form-group">
      <label>Description:</label>
      @error('description')
           <p>The Description is required.</p>
           @enderror
      <input type="description" name="description" class="form-control form-control-solid" placeholder="Enter Description"/>
      <span class="form-text text-muted">Please enter your Description</span>
      </div>
     
      <div class="card-footer">
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <button type="reset" class="btn btn-danger mr-2">Reset</button>
       <!-- <a href="{{route('expensescategory.view')}}">Cancel</a> -->
      </div>
    </form>
</div>

@endsection

