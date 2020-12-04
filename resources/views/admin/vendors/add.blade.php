@extends('admin.layouts.default')
@section('page_title','Add Vendor')
@section('content')
<style>
    p{
        color:red;
    }
    </style>
<div class="card-body card">
    <form class="form" method="post" action="{{route('vendors.store')}}" enctype="multipart/form-data">
     @csrf

     <div class="row">
    <div class="col-md-6">
        <div class="form-group">
        <label>First Name</label>
       <input type="text" name="fname" class="form-control form-control-solid" placeholder="Enter First Name" value="{{ old('fname') }}"/>
      @error('fname')
      <p>Please Enter First Name</p>
      @enderror
      {{-- <span class="form-text text-muted">Please enter your full name</span> --}}
     </div>
   </div>
   <div class="col-md-6">
        <div class="form-group">
        <label>Last Name</label>
       <input type="text" name="lname" class="form-control form-control-solid" placeholder="Enter Last Name" value="{{ old('lname') }}"/>
      @error('lname')
      <p>Please Enter Last Name</p>
      @enderror
      {{-- <span class="form-text text-muted">Please enter your full name</span> --}}
     </div>
   </div>
     <div class="col-md-6">
     <div class="form-group">
        <label>Gender</label>
        <select name="gender" class="form-control form-control-solid" value="{{ old('gender') }}">
            <option value="">Select a Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Others</option>
        </select>
        @error('gender')
      <p>Please Select a Gender</p>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
       <div class="form-group">
           <label>Date of Birth</label>
           <input type="date" name="dateofbirth" class="form-control form-control-solid" placeholder="Enter Birth Date" value="{{ old('dateofbirth') }}"/>
           @error('dateofbirth')
           <p>Please Enter Date of Birth</p>
           @enderror
       </div>
   </div>
   <div class="col-md-6">
       <div class="form-group">
           <label>Registration Number</label>
           <input type="text" name="registrationnumber"  class="form-control form-control-solid" placeholder="Enter Registration Number" value="{{ old('registrationnumber') }}"/>
           @error('registrationnumber')
           <p>Please Enter Registration Number</p>
           @enderror
       </div>
   </div>
   <div class="col-md-6">
       <div class="form-group">
           <label>PAN/VAT Number</label>
           <input type="text" name="panvatnumber"class="form-control form-control-solid" placeholder="Enter PAN/VAT Number" value="{{ old('panvatnumber') }}"/>
           @error('panvatnumber')
           <p>Please Enter PAN/VAT Number</p>
           @enderror
       </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
      <label>Email address</label>
      <input type="email"  name="email" class="form-control form-control-solid" placeholder="Enter Email" value="{{ old('email') }}"/>
      @error('email')
      <p>Please Enter Email</p>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
      <label>Password</label>
      <input type="password"  name="password" class="form-control form-control-solid" placeholder="Enter password" value="{{ old('password') }}"/>
      @error('password')
      <p>Please Enter password</p>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
        <label>Image</label>
        <input type="hidden" name="image">
        <input type="file" class="form-control form-control-solid" id="image" name="image" value="{{ old('image') }}"/>
        @error('image')
      <p>Please Select a Image</p>
      @enderror
     </div>
   </div>
    <div class="col-md-6">
     <div class="form-group">
        <label>Phone Number</label>
        <input type="text" name="phone"  class="form-control form-control-solid" placeholder="Enter Phone Number" value="{{ old('phone') }}"/>
        @error('phone')
      <p>Please Enter Phone Number</p>
      @enderror
     </div>
    </div>

   <div class="col-md-6">
     <div class="form-group">
        <label>Mobile Number</label>
        <input type="text" name="mobile"  class="form-control form-control-solid" placeholder="Enter Phone Number" value="{{ old('mobile') }}"/>
        @error('mobile')
      <p>Please Enter Mobile Number</p>
      @enderror
     </div>
    </div>
    <div class="col-md-6">
     <div class="form-group">
        <label>City</label>
        <input type="text" name="city" class="form-control form-control-solid" placeholder="Enter City" value="{{ old('city') }}"/>
        @error('city')
      <p>Please Enter city</p>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
        <label> Permanent Address</label>
        <input type="text" name="address1" class="form-control form-control-solid" placeholder="Enter Permanent Address" value="{{old('address1')  }}"/>
        @error('address1')
      <p>Please Enter Permanent Address</p>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
        <label>Address</label>
        <input type="text" name="address2" class="form-control form-control-solid" placeholder="Enter Temporary Address" value="{{ old('address2') }}"/>
        @error('address2')
      <p>Please Enter Temporary Address</p>
      @enderror
     </div>
   </div>

    <div class="col-md-6">
     <div class="form-group">
        <label>Vendor Type</label>
        <select name="vendor_type"  class="form-control form-control-solid" value="{{ old('vendor_type') }}">
            <option value="">Select Vendor Type</option>
            <option value="1">Individual</option>
            <option value="2">Organisation</option>
        </select>
        @error('vendor_type')
      <p>Please Select Vendor Type</p>
      @enderror
     </div>
   </div>
    <div class="col-md-6">
     <div class="form-group">
        <label>First Contact Person</label>
        <input type="text" name="firstcontactperson" class="form-control form-control-solid" placeholder="Enter the name of first contact person" value="{{ old('firstcontactperson') }}"/>
        @error('firstcontactperson')
      <p>Please Enter the name of first contact person</p>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
        <label>First Contact Person Email Address</label>
        <input type="email" name="firstemail" class="form-control form-control-solid" placeholder="Enter the email of first contact person" value="{{ old('firstemail') }}"/>
        @error('firstemail')
      <p>Please Enter the email of first contact person</p>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
        <label>First Contact Person Phone Number</label>
        <input type="text" name="firstphone" class="form-control form-control-solid" placeholder="Enter the phone number of first contact person" value="{{ old('firstemail') }}"/>
        @error('firstphone')
      <p>Please Enter the name of first contact person</p>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
        <label>Second Contact Person </label>
        <input type="text" name="secondcontactperson" class="form-control form-control-solid" placeholder="Enter the name of second contact person" value="{{ old('secondcontactperson') }}"/>
        @error('secondcontactperson')
      <p>Please Enter the name of second contact person</p>
      @enderror
     </div>
   </div>
    <div class="col-md-6">
     <div class="form-group">
        <label>Second Contact Person Email Address </label>
        <input type="text" name="secondemail" class="form-control form-control-solid" placeholder="Enter the email of second contact person" value="{{old('secondemail')  }}"/>
        @error('secondemail')
      <p>Please Enter the email of second contact person</p>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
        <label>Second Contact Person Phone Number </label>
        <input type="text" name="secondphone" class="form-control form-control-solid" placeholder="Enter the phone number of second contact person" value="{{ old('secondphone') }}"/>
        @error('secondphone')
      <p>Please Enter the phone number of second contact person</p>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">

                                    <input type="checkbox" value="1" id="Usercheck" name="ifuser"  checked>
                                    <span>Register For Vendor</span>
                                     @error('ifuser')
                                   <p>Select this checkbox.</p>
                                        @enderror
                                </div>
    </div>
  </div>
   <div class="col-md-6">
     <div class="form-group">
        <label>ID Proof</label>
        <input type="hidden" name="idproof">
        <input type="file" class="form-control form-control-solid" id="idproof" name="idproof" value="{{ old('idproof') }}"/>
        @error('idproof')
      <p>ID Proof is required</p>
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
@section('css')
<link href="{{asset('adminAssets/assets/plugins/select2/css/select2.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('adminAssets/assets/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
<script src="{{asset('adminAssets/assets/plugins/select2/js/select2.js')}}"></script>
<script src="{{asset('adminAssets/assets/js/pages/select2/select2-init.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
@endsection
