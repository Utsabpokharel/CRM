@extends('admin.layouts.default')
@section('page_title','Edit Expense Category')
@section('content')
<div class="card-body card">
    <form class="form" method="post" action="{{route('expensescategory.update',$expensescategory->id)}}" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
      <label>Name</label>
      <input type="name" name="name" class="form-control form-control-solid" placeholder="Enter Name" value="{{$expensescategory->name}}" />

      </div>
      <div class="form-group">
      <label>Description</label>
      <textarea class="form-control form-control-solid" name="description" rows="7" value="{{$expensescategory->description}}"> </textarea>

      </div>

      <div class="card-footer">
      <button type="submit" class="btn btn-primary mr-2">Update</button>
      <a href="{{route('expensescategory.view')}}">Cancel</a>
      </div>
    </form>
</div>

@endsection

