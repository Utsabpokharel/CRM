@extends('admin.layouts.default')
@section('page_title','Add Vendor')
@section('content')
<div class="card-body card">
    <form class="form">
<form method="post" action="{{route('vendor.create')}}" enctype="multipart/form-data">
                            @csrf

     <div class="form-group">
      <label for='fname'>Firstname</label>
      <input type="name" id="fname" name="fname" class="form-control form-control-solid" placeholder="Enter first name"/>
      <span class="form-text text-muted">Please enter your first name</span>
     </div>
     <div class="form-group">
      <label for='lname'>Lastname</label>
      <input type="name" id="lname" name="lname" class="form-control form-control-solid" placeholder="Enter last name"/>
      <span class="form-text text-muted">Please enter your last name</span>
     </div>
     <div class="form-group">
      <label for="gender">Gender</label>
      <div class="checkbox-list">
       <label class="checkbox">
        <input type="checkbox" id="gender" name="gender"/>
        <span></span>
        Male
       </label>
       <label class="checkbox">
        <input type="checkbox" id="gender" name="gender"/>
        <span></span>
        Female
       </label>
       <label class="checkbox">
        <input type="checkbox" id="gender" name="gender"/>
        <span></span>
        Other
       </label>
      </div>
     </div>
     <div class="form-group">
      <label>Date of Birth</label>
      <input type="date" id="dateofbirth" name="dateofbirth" class="form-control form-control-solid" placeholder="Enter your birth date"/>
      <span class="form-text text-muted">Birth Date is required</span>
     </div>
     <div class="form-group">
      <label>Registration Number</label>
      <input type="text" id="registrationumber" name="registrationnumber" class="form-control form-control-solid" placeholder="Enter your registration number"/>
      <span class="form-text text-muted">Registration Number is required</span>
     </div>
     <div class="form-group">
      <label>PAN/VAT Number</label>
      <input type="text" id="panvatnumber" name="panvatnumber" class="form-control form-control-solid" placeholder="Enter your pan/vat number"/>
      <span class="form-text text-muted">PAN/VAT is required</span>
     </div>
     <div class="form-group">
      <label>Email</label>
      <input type="email" id="email" name="email" class="form-control form-control-solid" placeholder="Enter your email"/>
      <span class="form-text text-muted">Email is required</span>
     </div>

     <div class="form-group">
      <label>Image</label>
      <input type="file" id="image" name="image" class="form-control form-control-solid" placeholder="Upload your image"/>
      <span class="form-text text-muted">Image is required</span>
     </div>

     <div class="form-group">
      <label>Mobile Number</label>
      <input type="text" id="mobile" name="mobile" class="form-control form-control-solid" placeholder="Enter your mobile number"/>
      <span class="form-text text-muted">Mobile Number is required</span>
     </div>

     <div class="form-group">
      <label>Address</label>
      <input type="text" id="address1" name="address1" class="form-control form-control-solid" placeholder="Enter your address"/>
      <span class="form-text text-muted">Address is required</span>
     </div>

     <div class="form-group">
      <label for="vendor_type">Vendor Type</label>
      <div class="checkbox-list">
       <label class="checkbox">
        <input type="checkbox" id="vendor_type" name="vendor_type"/>
        <span></span>
        Organization
       </label>
       <label class="checkbox">
        <input type="checkbox" id="vendor_type" name="vendor_type"/>
        <span></span>
        Individual
       </label>
      </div>
     </div>

    <div class="card-footer">
     <button type="reset" class="btn btn-primary mr-2">Submit</button>
     <a href="{{ route('vendor.index') }}" class="btn btn-info">View All</a>
     <button type="reset" class="btn btn-secondary">Cancel</button>

   </form>
</div>
@endsection
