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
          <label>Password</label>
          <input type="password" name="password" class="form-control form-control-solid" placeholder="Enter Passowrd" value="{{$user->password}}" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" name="confirm_password" class="form-control form-control-solid" placeholder="Enter Confirm Password" value="{{$user->password}}" />
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
            <option @if($user->roleid==1) selected @endif value="1">staff</option>
            <option @if($user->roleid==2) selected @endif value="2">vendor</option>
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

<!-- new -->
@extends('admin.layouts.default')
@section('page_title','Add User')
@section('content')
<style>
  p {
    color: red;
  }
</style>
<div class="card-body card">
  <form class="form" method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Name: </label>
          <select name="name" id="name" class="form-control form-control-solid">
            <option value="{{$user->name}}"> {{$user->name}}"</option>
            <option value="Sanjaya Shrestha">Sanjaya Shrestha</option>
            <option value="Sanjaya Shrestha">Utsab Pokharel</option>
            <option value="Sanjaya Shrestha">Basant Tamang</option>
            <option value="Sanjaya Shrestha">Biju Shrestha</option>
            <option value="Sanjaya Shrestha">Anup Pudasaini</option>
          </select>
          @error('name')
          <p>Select Name</p>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Email address</label>
          <input type="email" name="email" class="form-control form-control-solid" value="{{$user->email}}" />
          @error('email')
          <p>Please Enter Email</p>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Date of Birth</label>
          <span class="text-danger">*</span>
          <input type="date" class="form-control form-control-solid @error('dob') is-invalid @enderror" name="dob" value="" />
          @error('dob')
          <span class="invalid-feedback" role="alert"> {{$message}}</span>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Phone Number</label>
          <input type="number" name="phone" class="form-control form-control-solid" placeholder="Enter Phone Number" />
          @error('phone')
          <p>Please Enter Phone Number</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Gender</label>
          <select name="gender" id="gender" class="form-control form-control-solid">
            <option value="">Select a Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Others</option>
          </select>
          @error('gender')
          <p>Please Enter Select a Gender</p>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control form-control-solid" placeholder="Enter Passowrd" />
          @error('password')
          <p>{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Roles</label>
          <select name="roleid" id="role" class="form-control form-control-solid">
            <option value="">Select a Role</option>
            <option value="Staff">Staff</option>
            <option value="Vendor">Vendor</option>
          </select>
          @error('roleid')
          <p>Please Select a Role</p>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" name="confirm_password" class="form-control form-control-solid" placeholder="Enter Confirm Password" />
          @error('confirm_password')
          <p>Please Enter Confirm Password</p>
          @enderror
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary mr-2" value="submit">Add</button>
      <button type="reset" class="btn btn-secondary" value="reset">Reset</button>
      <a href="{{route('user.view')}}" class="btn btn-danger mr-2">Cancel</a>
    </div>
  </form>
</div>
@endsection