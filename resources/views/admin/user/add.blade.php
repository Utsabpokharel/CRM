@extends('admin.layouts.default')
@section('page_title','Add User')
@section('content')
<div class="card-body card">
    <form class="form">
     <div class="form-group">
      <label>Name</label>
      <input type="email" class="form-control form-control-solid" placeholder="Enter full name"/>
      {{-- <span class="form-text text-muted">Please enter your full name</span> --}}
     </div>
     <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control form-control-solid" placeholder="Enter Email"/>
     </div>
     <div class="form-group">
        <label>Phone Number</label>
        <input type="email" class="form-control form-control-solid" placeholder="Enter Phone Number"/>
     </div>
     <div class="form-group">
        <label>Password</label>
        <input type="email" class="form-control form-control-solid" placeholder="Enter Passowrd"/>
     </div>
     <div class="form-group">
        <label>Confirm Password</label>
        <input type="email" class="form-control form-control-solid" placeholder="Enter Confirm Password"/>
     </div>
     <div class="form-group">
        <label>Image</label>
        <input type="hidden" name="image">
        <input type="file" class="form-control form-control-solid" id="image" name="image"/>
     </div>
     <div class="form-group">
        <label>Gender</label>
        <select name="gender" id="" class="form-control form-control-solid">
            <option value="">Select a Gender</option>
            <option value="">Male</option>
            <option value="">Female</option>
            <option value="">Others</option>
        </select>
     </div>
     <div class="form-group">
        <label>Address</label>
        <input type="email" class="form-control form-control-solid" placeholder="Enter a Address"/>
     </div>
     <div class="form-group">
        <label>Roles</label>
        <select name="role" id="role" class="form-control form-control-solid">
            <option value="">Select a Role</option>
        </select>
     </div>
     
    </div>
    <div class="card-footer">
     <button type="reset" class="btn btn-primary mr-2">Submit</button>
     <button type="reset" class="btn btn-secondary">Cancel</button>

   </form>
</div>
@endsection
