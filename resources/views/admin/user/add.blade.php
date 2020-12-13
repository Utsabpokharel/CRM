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
            <option value="">Select Name</option>
            @foreach($staffs as $name)
              <option value="{{$name->id}}" class="form-control">{{$name->fname}} {{$name->lname}}</option>
            @endforeach

            @foreach($vendors as $name)
              <option value="{{$name->id}}" class="form-control">{{$name->fname}} {{$name->lname}}</option>
            @endforeach

            @foreach($customers as $name)
              <option value="{{$name->id}}" class="form-control">{{$name->fname}} {{$name->lname}}</option>
            @endforeach

            
          </select>
          @error('name')
          <p>Select Name</p>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Email address</label>
          <input type="email" name="email" class="form-control form-control-solid" placeholder="Enter Email" />
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
            @foreach($roles as $roleid)
              <option value="{{$roleid->id}}" class="form-control">{{$roleid->name}}</option>
            @endforeach
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