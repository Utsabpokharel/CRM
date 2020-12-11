@extends('admin.layouts.default')
@section('page_title','Edit User')
@section('content')
<div class="card-body card">
  <form class="form" method="post" action="{{route('user.update',$user->id)}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Name</label>
          <input type="name" name="name" class="form-control form-control-solid" placeholder="Enter full name" value="{{$user->name}}" />
          {{-- <span class="form-text text-muted">Please enter your full name</span> --}}
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Email address</label>
          <input type="email" name="email" class="form-control form-control-solid" placeholder="Enter Email" value="{{$user->email}}" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Phone Number</label>
          <input type="text" name="phone" class="form-control form-control-solid" placeholder="Enter Phone Number" value="{{$user->phone}}" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Image</label>
          <input type="hidden" name="image">
          <input type="file" class="form-control form-control-solid" id="image" name="image" value="{{$user->image}}" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Gender</label>
          <select name="gender" id="gender" class="form-control form-control-solid">
            <option>Select a Gender</option>
            <option @if($user->gender=='Male') selected @endif value="Male">Male</option>
            <option @if($user->gender=='Female') selected @endif value="Female">Female</option>
            <option @if($user->gender=='Other') selected @endif value="Other">Others</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" class="form-control form-control-solid" placeholder="Enter a Address" value="{{$user->address}}" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Roles</label>
          <select name="roleid" id="role" class="form-control form-control-solid" value="{{$user->roleid}}">
            <option value="">Select a Role</option>
            @foreach($roles as $roleid)
              <option value="{{$roleid->id}}" class="form-control">{{$roleid->name}}</option>
            @endforeach
          </select>
        </div>
      </div>

    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary mr-2" value="submit">Update</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>
</div>
@endsection


  