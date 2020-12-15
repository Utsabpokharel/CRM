@extends('admin.layouts.default')
@section('page_title','Add Vendor')
@section('content')

<div class="card-body card">
    <form class="form" method="post" action="{{route('vendors.store')}}" enctype="multipart/form-data">
     @csrf
     <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label>First Name</label>
          <span class="text-danger">*</span>
          <input type="text" class="form-control form-control-solid @error('fname') is-invalid @enderror"
          name="fname" placeholder="Enter First Name"/>
          @error('fname')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>

        <div class="form-group">
          <label>Gender</label>
          <span class="text-danger">*</span>
          <select name="gender" id="gender"
          class="form-control form-control-solid @error('gender') is-invalid @enderror"
          name="gender" data-validation="required">
          <option selected disabled="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="others">Others</option>
          </select>
          @error('gender')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>

        <div class="form-group">
          <label>Phone Number</label>
          <input type="number" class="form-control form-control-solid" name="phoneno"
          placeholder="Enter Phone Number" data-validation="required"/>
        </div>
   
        <div class="form-group">
          <label>Email Address</label>
          <span class="text-danger">*</span>
          <input type="email" class="form-control form-control-solid @error('email') is-invalid @enderror"
          id="email" name="email" placeholder="Enter Email Address"/>
          @error('email')
          <span class="invalid-feedback" role="alert"> {{$message}}</span>
          @enderror
          <p id="emailExists" style="color: red; display: none">Email Already Exists In Our Database</p>
        </div>

        <div class="form-group">
          <label>Password</label>
          <span class="text-danger">*</span>
          <input type="password" class="form-control form-control-solid @error('password') is-invalid @enderror" id="password"
          name="password" placeholder="Enter Password"/>
          @error('password')
          <span class="invalid-feedback" role="alert"> {{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label>Permanent Address</label>
          <span class="text-danger">*</span>
          <input type="text" class="form-control form-control-solid @error('permanent_address') is-invalid @enderror"
          name="permanent_address" placeholder="Enter Permanent Address"/>
          @error('permanent_address')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>

        <div class="form-group">
          <label>District</label>
          <span class="text-danger">*</span>
          <select name="district" id="district" class="form-control form-control-solid @error('district') is-invalid @enderror" data-validation="required" > 
          <option selected value="">Please Select One...</option>
          @foreach($district as $districts)
              <option value="{{$districts->district_name}}">
              {{ strtoupper($districts->district_name)}}
              </option>
          @endforeach
          </select>

          @error('district')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>

        <div class="form-group">
          <label>Vendor Type</label>
          <span class="text-danger">*</span>
          <select name="vendor_type"  class="form-control form-control-solid @error('vendor_type') is-invalid @enderror" value="{{ old('vendor_type') }}">
          <option value="">Select Vendor Type</option>
          <option value="1">Individual</option>
          <option value="2">Organisation</option>
          </select>
          @error('vendor_type')
          <span class="invalid-feedback" role="alert">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
          <label>First Contact Person</label>
          <input type="text" name="firstcontactperson" class="form-control form-control-solid @error('firstcontactperson') is-invalid @enderror" placeholder="Enter the name of first contact person" value="{{ old('firstcontactperson') }}"/>
          @error('firstcontactperson')
          <span class="invalid-feedback" role="alert">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          <label>First Contact Person Phone Number</label>
          <input type="text" name="firstphone" class="form-control form-control-solid @error('firstphone') is-invalid @enderror" placeholder="Enter the phone number of first contact person" value="{{ old('firstemail') }}"/>
          @error('firstphone')
          <span class="invalid-feedback" role="alert">{{ $message }}</span>
          @enderror
     </div>

     <div class="form-group">
        <label>Second Contact Person Email Address </label>
        <input type="text" name="secondemail" class="form-control form-control-solid @error('secondemail') is-invalid @enderror" placeholder="Enter the email of second contact person" value="{{old('secondemail')  }}"/>
        @error('secondemail')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
     </div>

     <div class="col-sm-6">
                    <div class="form-group">
                        <label>Last Name</label>
                        <span class="text-danger">*</span>
                        <input type="text" class="form-control form-control-solid @error('lname') is-invalid @enderror"
                               name="lname" placeholder="Enter Last Name"/>
                        @error('lname')
                        <span class="invalid-feedback" role="alert"> {{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
          <label>Date of Birth</label>
          <span class="text-danger">*</span>
          <input type="date" class="form-control form-control-solid @error('dob') is-invalid @enderror" name="dateofbirth"/>
          @error('dob')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>

        <div class="form-group">
                        <label>Mobile Number</label>
                        <span class="text-danger">*</span>
                        <input type="number" class="form-control form-control-solid  @error('mobileno') is-invalid @enderror" name="mobileno"
                               placeholder="Enter Mobile Number" data-validation="required"/>
                            @error('mobileno')
                            <span class="invalid-feedback" role="alert"> {{$message}} </span>
                            @enderror
                    </div>

                    <div class="form-group">
                      <label>Registration Number</label>
                      <input type="number" name="registrationnumber"  class="form-control form-control-solid @error('registrationnumber') is-invalid @enderror" placeholder="Enter Registration Number" value="{{ old('registrationnumber') }}"/>
                      @error('registrationnumber')
                      <span class="invalid-feedback" role="alert">{{ $message }}</span>
                      @enderror
                    </div>

        <div class="form-group">
          <label>Confirm Password</label>
          <span class="text-danger">*</span>
          <input type="password" class="form-control form-control-solid @error('confirm_password') is-invalid @enderror"
          id="password" name="confirm_password" placeholder="Confirm Password"/>
          @error('confirm_password')
          <span class="invalid-feedback" role="alert"> {{$message}}</span>
          @enderror
        </div>

        

                    <div class="form-group">
                        <label>Temporary Address</label>
                        <span class="text-danger">*</span>
                        <input type="text" class="form-control form-control-solid @error('temporary_address') is-invalid @enderror" name="temporary_address" placeholder="Enter Temporary Address"/>
                        @error('temporary_address')
                        <span class="invalid-feedback" role="alert"> {{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <span class="text-danger">*</span>
                        <select name="city" id="city"
                                class="form-control form-control-solid @error('city') is-invalid @enderror" name="city">
                            <option selected value="">Please Select One...</option>
                            <option value="abcd">abcd</option>
                        </select>
                        @error('city')
                        <span class="invalid-feedback" role="alert"> {{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>PAN/VAT Number</label>
                        <input type="number" class="form-control form-control-solid" name="panvatnumber"
                               placeholder="Enter PAN Number" data-validation="required"/>
                    </div>

     <div class="form-group">
        <label>First Contact Person Email Address</label>
        <input type="email" name="firstemail" class="form-control form-control-solid @error('firstemail') is-invalid @enderror" placeholder="Enter the email of first contact person" value="{{ old('firstemail') }}"/>
        @error('firstemail')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>

    


     <div class="form-group">
        <label>Second Contact Person </label>
        <input type="text" name="secondcontactperson" class="form-control form-control-solid @error('secondcontactperson') is-invalid @enderror" placeholder="Enter the name of second contact person" value="{{ old('secondcontactperson') }}"/>
        @error('secondcontactperson')
      <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>

    
     
 

     <div class="form-group">
        <label>Second Contact Person Phone Number </label>
        <input type="text" name="secondphone" class="form-control form-control-solid @error('secondphone') is-invalid @enderror" placeholder="Enter the phone number of second contact person" value="{{ old('secondphone') }}"/>
        @error('secondphone')
       <span class="invalid-feedback" role="alert">{{ $message }}</span>
      @enderror
     </div>
 
  </div>


                    <div class="col-lg-12">
                    <center> <h1 style="background-color:powderblue;">Documents</h1> </center>
                    </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Passport Size Photo</label>
                        <input type="file" class="form-control form-control-solid" name="pp_photo"/>
                    </div>


                    <div class="form-group">
                        <label>Citizenship Proof (Frontside)</label>
                        <input type="file" class="form-control form-control-solid" name="frontcitizenshipimage"
                               data-validation="required"/>
                    </div>

                    <div class="form-group">
                        <label>Offer Letter</label>
                        <input type="file" class="form-control form-control-solid" name="offer_letter"
                               data-validation="required"/>
                    </div>

                    <div class="form-group">
                        <label>Contract and Agreement</label>
                        <input type="file" class="form-control form-control-solid" name="contract_agreement"
                               data-validation="required"/>
                    </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>Resume</label>
                        <input type="file" class="form-control form-control-solid" name="resume"
                               data-validation="required"/>
                    </div>

                    <div class="form-group">
                        <label>Citizenship Proof (Backside)</label>
                        <input type="file" class="form-control form-control-solid" name="backcitizenshipimage"
                               data-validation="required"/>
                    </div>

                    <div class="form-group">
                        <label>Joining Letter</label>
                        <input type="file" class="form-control form-control-solid" name="joining_letter"
                               data-validation="required"/>
                    </div>
                    </div>

                <div class="form-group">
                    <input type="checkbox" id="Usercheck" name="ifuser" value='1' checked>
                    <span>Register For User</span>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-danger mr-2">Reset</button>
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
