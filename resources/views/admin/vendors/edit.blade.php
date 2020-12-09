@extends('admin.layouts.default')
@section('page_title','Update Vendor')
@section('content')
<style>
    p{
        color:red;
    }
    </style>
<div class="card-body card">
    <form class="form" method="post" action="{{route('vendors.update',$vendor->id)}}" enctype="multipart/form-data">
     @csrf

     <div class="row">
    <div class="col-md-6">
        <div class="form-group">
        <label>First Name</label>
       <input type="text" name="fname" class="form-control form-control-solid @error('fname') is-invalid @enderror" placeholder="Enter First Name" value="{{ $vendor->fname }}"/>
      @error('fname')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
      {{-- <span class="form-text text-muted">Please enter your full name</span> --}}
     </div>
   </div>
   <div class="col-md-6">
        <div class="form-group">
        <label>Last Name</label>
       <input type="text" name="lname" class="form-control form-control-solid @error('lname') is-invalid @enderror" placeholder="Enter Last Name" value="{{ $vendor->lname}}"/>
      @error('lname')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
      {{-- <span class="form-text text-muted">Please enter your full name</span> --}}
     </div>
   </div>
     <div class="col-md-6">
     <div class="form-group">
        <label>Gender</label>
        <select name="gender" class="form-control form-control-solid @error('gender') is-invalid @enderror" value="{{$vendor->gender}}">
            <option value="">Select a Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Others</option>
        </select>
        @error('gender')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
       <div class="form-group">
           <label>Date of Birth</label>
           <input type="date" name="dateofbirth" class="form-control form-control-solid @error('dateofbirth') is-invalid @enderror" placeholder="Enter Birth Date" value="{{$vendor->dateofbirth}}"/>
           @error('dateofbirth')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
       </div>
   </div>
   <div class="col-md-6">
       <div class="form-group">
           <label>Registration Number</label>
           <input type="text" name="registrationnumber"  class="form-control form-control-solid @error('registrationnumber') is-invalid @enderror" placeholder="Enter Registration Number" value="{{$vendor->registrationnumber}}"/>
           @error('registrationnumber')
           <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
       </div>
   </div>
   <div class="col-md-6">
       <div class="form-group">
           <label>PAN/VAT Number</label>
           <input type="text" name="panvatnumber"class="form-control form-control-solid @error('panvatnumber') is-invalid @enderror" placeholder="Enter PAN/VAT Number" value="{{$vendor->panvatnumber }}"/>
           @error('panvatnumber')
          <span class="invalid-feedback" role="alert">{{ $message }}</span>
           @enderror
       </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
      <label>Email address</label>
      <input type="email"  name="email" class="form-control form-control-solid @error('email') is-invalid @enderror" placeholder="Enter Email" value="{{$vendor->email}}"/>
      @error('email')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>

   <div class="col-md-6">
     <div class="form-group">
        <label>Image</label>
        <input type="hidden" name="image">
        <input type="file" class="form-control form-control-solid @error('image') is-invalid @enderror" id="image" name="image" value="{{$vendor->image}}"/>
        @error('image')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>
    <div class="col-md-6">
     <div class="form-group">
        <label>Phone Number</label>
        <input type="text" name="phone"  class="form-control form-control-solid @error('phone') is-invalid @enderror" placeholder="Enter Phone Number" value="{{$vendor->phone}}"/>
        @error('phone')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
    </div>

   <div class="col-md-6">
     <div class="form-group">
        <label>Mobile Number</label>
        <input type="text" name="mobile"  class="form-control form-control-solid @error('mobile') is-invalid @enderror" placeholder="Enter Phone Number" value="{{$vendor->mobile}}"/>
        @error('mobile')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
    </div>
    <div class="col-md-6">
     <div class="form-group">
        <label>Select Your City</label>
        <select name="city"  class="form-control form-control-solid @error('city') is-invalid @enderror " value="{{$vendor->city}}"
                                            >
                                        <option selected disabled="">Select  City</option>
                                        <option value="Kathmandu">Kathmandu</option>
                                        <option value="Pokhara">Pokhara</option>
                                        <option value="Hetauda">Hetauda</option>
                                    </select>
        @error('city')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
        <label>Select Your District</label>
        <select name="district"  class="form-control form-control-solid @error('district') is-invalid @enderror " value="{{$vendor->district}}"
                                            >
                                        <option selected disabled="">Select District</option>
                                        <option value="Kathmandu">Kathmandu</option>
                                        <option value="Lalitpur">Lalitpur</option>
                                        <option value="Bhaktapur">Bhaktapur</option>
                                    </select>
        @error('district')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
        <label> Permanent Address</label>
        <input type="text" name="address1" class="form-control form-control-solid @error('address1') is-invalid @enderror" placeholder="Enter Permanent Address" value="{{$vendor->address1 }}"/>
        @error('address1')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
        <label>Address</label>
        <input type="text" name="address2" class="form-control form-control-solid @error('address2') is-invalid @enderror" placeholder="Enter Temporary Address" value="{{$vendor->address2}}"/>
        @error('address2')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>

    <div class="col-md-6">
     <div class="form-group">
        <label>Vendor Type</label>
        <select name="vendor_type"  class="form-control form-control-solid @error('vendor_type') is-invalid @enderror" value="{{$vendor->vendor_type}}">
            <option value="">Select Vendor Type</option>
            <option value="1">Individual</option>
            <option value="2">Organisation</option>
        </select>
        @error('vendor_type')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>
    <div class="col-md-6">
     <div class="form-group">
        <label>First Contact Person</label>
        <input type="text" name="firstcontactperson" class="form-control form-control-solid @error('firstcontactperson') is-invalid @enderror" placeholder="Enter the name of first contact person" value="{{$vendor->firstcontactperson}}"/>
        @error('firstcontactperson')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
        <label>First Contact Person Email Address</label>
        <input type="email" name="firstemail" class="form-control form-control-solid @error('firstemail') is-invalid @enderror" placeholder="Enter the email of first contact person" value="{{ $vendor->firstemail }}"/>
        @error('firstemail')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
        <label>First Contact Person Phone Number</label>
        <input type="text" name="firstphone" class="form-control form-control-solid @error('firstphone') is-invalid @enderror" placeholder="Enter the phone number of first contact person" value="{{ $vendor->firstphone}}"/>
        @error('firstphone')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
        <label>Second Contact Person </label>
        <input type="text" name="secondcontactperson" class="form-control form-control-solid @error('secondcontactperson') is-invalid @enderror" placeholder="Enter the name of second contact person" value="{{ $vendor->secondcontactperson}}"/>
        @error('secondcontactperson')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>
    <div class="col-md-6">
     <div class="form-group">
        <label>Second Contact Person Email Address </label>
        <input type="text" name="secondemail" class="form-control form-control-solid @error('secondemail') is-invalid @enderror" placeholder="Enter the email of second contact person" value="{{$vendor->secondemail}}"/>
        @error('secondemail')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
        <label>Second Contact Person Phone Number </label>
        <input type="text" name="secondphone" class="form-control form-control-solid @error('secondphone') is-invalid @enderror" placeholder="Enter the phone number of second contact person" value="{{$vendor->secondphone}}"/>
        @error('secondphone')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>

   <div class="col-md-6">
     <div class="form-group">
        <label>Front Citizenship Image</label>
        <input type="hidden" name="frontcitizenshipimage">
        <input type="file" class="form-control form-control-solid @error('frontcitizenshipimage') is-invalid @enderror" id="frontcitizenshipimage" name="frontcitizenshipimage" value="{{ $vendor->frontcitizenshipimage}}"/>
        @error('frontcitizenshipimage')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>

   <div class="col-md-6">
     <div class="form-group">
        <label>Back Citizenship Image</label>
        <input type="hidden" name="backcitizenshipimage">
        <input type="file" class="form-control form-control-solid @error('backcitizenshipimage') is-invalid @enderror" id="backcitizenshipimage" name="backcitizenshipimage" value="{{$vendor->backcitizenshipimage}}"/>
        @error('backcitizenshipimage')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">

                                    <input type="checkbox" value="1" id="Usercheck" name="ifuser"  checked>
                                    <span>Register For User</span>


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
