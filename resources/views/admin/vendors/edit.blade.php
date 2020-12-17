@extends('admin.layouts.default')
@section('page_title','Update Vendor')
@section('content')

<div class="card-body card">
    <form class="form" method="post" action="{{route('vendors.update',$vendor->id)}}" enctype="multipart/form-data">
     @csrf

     <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label>First Name</label>
          <span class="text-danger">*</span>
          <input type="text" class="form-control form-control-solid @error('fname') is-invalid @enderror"
          name="fname" value="{{$vendor->fname}}"/>
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
          <input type="number" class="form-control form-control-solid" name="phone"
          value="{{$vendor->phone}}"/>
        </div>

        <div class="form-group">
          <label>Email Address</label>
          <span class="text-danger">*</span>
          <input type="email" class="form-control form-control-solid @error('email') is-invalid @enderror"
          id="email" name="email" value="{{$vendor->email}}"/>
          @error('email')
          <span class="invalid-feedback" role="alert"> {{$message}}</span>
          @enderror
          <p id="emailExists" style="color: red; display: none">Email Already Exists In Our Database</p>
        </div>

        <div class="form-group">
          <label>Permanent Address</label>
          <span class="text-danger">*</span>
          <input type="text" class="form-control form-control-solid @error('permanent_address') is-invalid @enderror"
          name="permanent_address" value="{{$vendor->permanent_address}}"/>
          @error('permanent_address')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>

        <div class="form-group">
          <label>District</label>
          <span class="text-danger">*</span>
          <select name="district" id="district" class="form-control form-control-solid @error('district') is-invalid @enderror" data-validation="required" >
          <option value="abcd">abcd</option>
          </select>
          @error('district')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>

        <div class="form-group">
          <label>Vendor Type</label>
          <span class="text-danger">*</span>
          <select name="vendor_type"  class="form-control form-control-solid @error('vendor_type') is-invalid @enderror">
            <option value="1">Individual</option>
            <option value="2">Organisation</option>
          </select>
          @error('vendor_type')
          <span class="invalid-feedback" role="alert">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          <label>First Contact Person</label>
          <input type="text" name="firstcontactperson" class="form-control form-control-solid @error('firstcontactperson') is-invalid @enderror" value="{{$vendor->firstcontactperson}}"/>
          @error('firstcontactperson')
          <span class="invalid-feedback" role="alert">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          <label>First Contact Person Phone Number</label>
          <input type="text" name="firstphone" class="form-control form-control-solid @error('firstphone') is-invalid @enderror" value="{{$vendor->firstphone}}"/>
          @error('firstphone')
          <span class="invalid-feedback" role="alert">{{ $message }}</span>
          @enderror
     </div>

     <div class="form-group">
        <label>Second Contact Person Email Address </label>
        <input type="text" name="secondemail" class="form-control form-control-solid @error('secondemail') is-invalid @enderror" value="{{$vendor->secondemail}}"/>
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
          name="lname" value="{{$vendor->lname}}"/>
          @error('lname')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
          </div>

        <div class="form-group">
          <label>Date of Birth</label>
          <span class="text-danger">*</span>
          <input type="date" class="form-control form-control-solid @error('dob') is-invalid @enderror" name="dateofbirth" value="{{$vendor->dateofbirth}}"/>
          @error('dob')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>

        <div class="form-group">
          <label>Mobile Number</label>
          <span class="text-danger">*</span>
          <input type="number" class="form-control form-control-solid  @error('mobile') is-invalid @enderror" name="mobile"
          value="{{$vendor->mobile}}" data-validation="required"/>
          @error('mobile')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>

        <div class="form-group">
          <label>Registration Number</label>
          <input type="number" name="registrationnumber"  class="form-control form-control-solid @error('registrationnumber') is-invalid @enderror" value="{{$vendor->registrationnumber}}"/>
          @error('registrationnumber')
          <span class="invalid-feedback" role="alert">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          <label>Temporary Address</label>
          <span class="text-danger">*</span>
          <input type="text" class="form-control form-control-solid @error('temporary_address') is-invalid @enderror" name="temporary_address"  value="{{$vendor->temporary_address}}"/>
          @error('temporary_address')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>

        <div class="form-group">
          <label>City</label>
          <span class="text-danger">*</span>
          <select name="city" id="city"
          class="form-control form-control-solid @error('city') is-invalid @enderror" name="city">
          <option value="abcd">abcd</option>
          </select>
          @error('city')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>

        <div class="form-group">
          <label>PAN/VAT Number</label>
          <input type="number" class="form-control form-control-solid" name="panvatnumber"
          value="{{$vendor->panvatnumber}}" data-validation="required"/>
        </div>

        <div class="form-group">
          <label>First Contact Person Email Address</label>
          <input type="email" name="firstemail" class="form-control form-control-solid @error('firstemail') is-invalid @enderror" value="{{$vendor->firstemail}}"/>
          @error('firstemail')
          <span class="invalid-feedback" role="alert">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          <label>Second Contact Person </label>
          <input type="text" name="secondcontactperson" class="form-control form-control-solid @error('secondcontactperson') is-invalid @enderror" value="{{$vendor->secondcontactperson}}"/>
          @error('secondcontactperson')
          <span class="invalid-feedback" role="alert">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          <label>Second Contact Person Phone Number </label>
          <input type="text" name="secondphone" class="form-control form-control-solid @error('secondphone') is-invalid @enderror" value="{{$vendor->secondphone}}"/>
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

               <div class="col-md-6">
                <div class="form-group">
                  <input type="checkbox" value="1" id="Usercheck" name="ifuser"  checked>
                  <span>Register For User</span>
                </div>
               </div>
        </div>

        <div class="card-footer">
     <button type="submit" class="btn btn-primary mr-2" value="submit">Update</button>
     <a href="{{route('vendors.view')}}" class ="btn btn-danger mr-2">Cancel</a>
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
