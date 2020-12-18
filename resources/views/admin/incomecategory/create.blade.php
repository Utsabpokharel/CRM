@extends('admin.layouts.default')
@section('page_title','Add Income Category')
@section('content')
<style type="text/css">
 p {

    color: red;
  }
</style>
<div class="card-body card">
    <form class="form" method="post" action="{{route('incomecategory.store')}}" enctype="multipart/form-data">
    @csrf
    
      <div class="form-group">
      <label>Name</label>
      @error('name')
           <p>The name is required.</p>
           @enderror
      <input type="name" name="name" class="form-control form-control-solid" placeholder="Enter Name"/>
    
      </div>

      <div class="form-group">
      <label>Description</label>
      @error('description')
           <p>The Description is required.</p>
           @enderror
           <textarea class="form-control form-control-solid" placeholder="Enter Description" name="description" rows="7"> </textarea>
 
      </div>
      <div class="card-footer">
      <button type="submit" value="submit" class="btn btn-primary mr-2">Add</button>
      <button type="reset" class="btn btn-secondary mr-2" value="reset">Reset</button>
      <a href="{{route('incomecategory.view')}}" class="btn btn-danger">Cancel</a>
      </div>
    </form>
</div>

@endsection

