@extends('admin.layouts.default')
@section('page_title','Add User')
@section('content')
<style>
  p{
    color: red;
  }
</style>
<div class="card-body card">
<form class="form" method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
   @csrf
       <div class="row">
     <div class="col-md-6">
     <div class="form-group">
      <label>Name</label>
      <input type="name" name="name" class="form-control form-control-solid" placeholder="Enter Full Name"/>
      @error('name')
      <p>Please Enter Full Name</p>
      @enderror
      {{-- <span class="form-text text-muted">Please enter your full name</span> --}}
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
      <label>Email address</label>
      <input type="email" name="email" class="form-control form-control-solid" placeholder="Enter Email"/>
      @error('email')
      <p>Please Enter Email</p>
      @enderror
     </div>
   </div>
     <div class="col-md-6">
     <div class="form-group">
        <label>Phone Number</label>
        <input type="text" name="phone" class="form-control form-control-solid" placeholder="Enter Phone Number"/>
        @error('phone')
      <p>Please Enter Phone Number</p>
      @enderror
     </div>
   </div>
     <div class="col-md-6">
     <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control form-control-solid" placeholder="Enter Passowrd"/>
        @error('password')
      <p>{{$message}}</p>
      @enderror
     </div>
   </div>
     <div class="col-md-6">
     <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control form-control-solid" placeholder="Enter Confirm Password"/>
        @error('confirm_password')
        <p>Please Enter Confirm Password</p>
        @enderror
     </div>
   </div>
     <div class="col-md-6">
     <div class="form-group">
        <label>Image</label>
        <input type="hidden" name="image">
        <input type="file" class="form-control form-control-solid" id="image" name="image"/>
        @error('image')
      <p>Please Select a Image</p>
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
        <label>Address</label>
        <input type="text" name="address" class="form-control form-control-solid" placeholder="Enter a Address"/>
        @error('address')
      <p>Please Enter a Address</p>
      @enderror
     </div>
   </div>
     <div class="col-md-6">
     <div class="form-group">
        <label>Roles</label>
        <select name="roleid" id="role" class="form-control form-control-solid">
            <option value="">Select a Role</option>
            <option value="1">staff</option>
            <option value="2">vendor</option>
        </select>
        @error('roleid')
      <p>Please Select a Role</p>
      @enderror
     </div>
   </div>
     
    </div>
    <div class="card-footer">
     <button type="submit" class="btn btn-primary mr-2" value="submit">Submit</button>
     <button type="reset" class="btn btn-secondary" value="reset">Reset</button>
   </div>
   </form>
</div>
@endsection
