@extends('admin.layouts.default')
@section('page_title','Add Customer')
@section('content')


<div class="card-body card">
    <form class="form" method="post" action="{{route('customer.store')}}" enctype="multipart/form-data">
     @csrf
      <div class="row">

<div class="col-sm-6">
     <div class="form-group">
      <label>First Name:</label>


      <input type="text" name="fname" class="form-control form-control-solid @error('fname') is-invalid @enderror" placeholder="Enter First Name" value="{{old('fname')}}"/>

      @error('fname')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>



<div class="col-sm-6">
     <div class="form-group">
      <label>Last Name:</label>
      
      <input type="text" name="lname" class="form-control form-control-solid @error('lname') is-invalid @enderror" placeholder="Enter Last Name" value="{{old('lname')}}"/>
      @error('lname')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>
 

    

      
                                 <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Select Gender</label>
                                    
                                    <select name="gender"  class="form-control form-control-solid @error('gender') is-invalid @enderror" value="{{old('gender')}}"
                                            >
                                        <option selected disabled="">Select  Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                     @error('gender')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
                                </div>
                              </div>
                            
     <div class="col-md-6">
      <div class="form-group">
      <label>Date Of Birth</label>
      <input type="date" name="dob" class="form-control form-control-solid @error('dob') is-invalid @enderror" placeholder="Select your Birth Date" value="{{old('dob')}}"/>
      
      @error('dob')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>
<div class="col-md-6">
     <div class="form-group">
      <label>Email address:</label>
      
      <input type="email" name="email" class="form-control form-control-solid @error('email') is-invalid @enderror" placeholder="Enter email" value="{{old('email')}}"/>
      @error('email')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
</div>

<div class="col-md-6">
     <div class="form-group">
      <label>Password:</label>
      
      <input type="password" name="password" class="form-control form-control-solid @error('password') is-invalid @enderror" placeholder="Enter password" value="{{old('password')}}"/>
      @error('password')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
</div>

<div class="col-md-6">
     <div class="form-group">
      <label>Phone Number:</label>
      
      <input type="text" name="phone" class="form-control form-control-solid @error('phone') is-invalid @enderror" placeholder="Enter Phone Number" value="{{old('phone')}}"/>
      @error('phone')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
</div>
<div class="col-md-6">
      <div class="form-group">
      <label>Mobile Number:</label>
      
      <input type="text" name="mobile" class="form-control form-control-solid @error('mobile') is-invalid @enderror" placeholder="Enter Mobile Number" value="{{old('mobile')}}"/>
      @error('mobile')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>
     

     <div class="col-md-6">
     <div class="form-group">
                                    <label>Select your City</label>
                                    
                                    <select name="city"  class="form-control form-control-solid @error('city') is-invalid @enderror" value="{{old('city')}}"
                                            >
                                        <option selected disabled="">Select  City</option>
                                        <option value="Kathmandu">Kathamandu</option>
                                        <option value="Pokhara">Pokhara</option>
                                        <option value="Hetauda">Hetauda</option>
                                    </select>
                                     @error('city')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
                                </div>
                              </div>
     <div class="col-md-6">
      <div class="form-group">
                                    <label>Select your District</label>
                                    
                                    <select name="district"  class="form-control form-control-solid @error('district') is-invalid @enderror" value="{{old('district')}}"
                                            >
                                        <option selected disabled="">Select District</option>
                                        <option value="Kathmandu">Kathamandu</option>
                                        <option value="Bhaktapur">Bhaktapur</option>
                                        <option value="Lalitpur">Laltipur</option>
                                    </select>
                                     @error('district')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
                                </div>
                              </div>
     <div class="col-md-6">
     <div class="form-group">
      <label>Permanent Address</label>
      
      <input type="text" name="permanentaddress" class="form-control form-control-solid @error('permanentaddress') is-invalid @enderror" placeholder="Enter Permanent Address" value="{{old('permanentaddress')}}"/>
      @error('permanentaddress')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
     </div>

     <div class="col-md-6">
     <div class="form-group">
      <label>Temporary Address</label>
      
      <input type="text" name="temporaryaddress" class="form-control form-control-solid @error('temporaryaddress') is-invalid @enderror" placeholder="Enter Temporary Address" value="{{old('temporaryaddress')}}"/>
      @error('temporaryaddress')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
     </div>

     <div class="col-md-6">
      <div class="form-group">
                                    <label>Customer Type</label>
                                   
                                    <select name="customer_type"  class="form-control form-control-solid @error('customer_type') is-invalid @enderror"  value="{{old('customer_type')}}"
                                            >
                                        <option selected disabled="">Select One</option>
                                        <option value="Organization">Organization</option>
                                        <option value="Individual">Individual</option>
                                        
                                    </select>
                                      @error('customer_type')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
                                </div>
                              </div>

    <div class="col-md-6">
     <div class="form-group">
                                    <label>Your Photo</label>
                                    
                                    <input type="hidden" name="current_image">
                                    <input type="file" class="form-control form-control-solid @error('image') is-invalid @enderror" name="image"  value="{{old('image')}}">
                                   @error('image')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
                                </div>
                              </div>
<div class="col-md-6">
     <div class="form-group">
                                    <label>Front Citizenship Photo</label>
                                    
                                    <input type="hidden" name="current_frontcitizenshipimage">
                                    <input type="file" class="form-control form-control-solid @error('frontcitizenshipimage') is-invalid @enderror"  name="frontcitizenshipimage"  value="{{old('frontcitizenshipimage')}}">
                                    @error('frontcitizenshipimage')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
                                </div>
                              </div>

<div class="col-md-6">
     <div class="form-group">
                                    <label>Back Citizenship Photo</label>
                                    
                                    <input type="hidden" name="current_backcitizenshipimage">
                                    <input type="file" class="form-control form-control-solid @error('backcitizenshipimage') is-invalid @enderror"  name="backcitizenshipimage" value="{{old('backcitizenshipimage')}}">
                                   @error('backcitizenshipimage')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
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
  </div>
    <div class="card-footer">
          <input type="submit" value="submit" class="btn btn-success">
          <input type="reset" value="reset" class="btn btn-danger">
        </div>
   </form>
</div>
@endsection
