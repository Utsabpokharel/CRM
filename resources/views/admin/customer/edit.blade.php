@extends('admin.layouts.default')
@section('page_title','Update Customer')
@section('content')


<div class="card-body card">
    <form class="form" method="post" action="{{route('customer.update',$customer->id)}}" enctype="multipart/form-data">
     @csrf
     @method('put')
      <div class="row">

<div class="col-sm-6">
     <div class="form-group">
      <label>First Name:</label>


      <input type="text" name="fname" class="form-control form-control-solid @error('fname') is-invalid @enderror" placeholder="Enter First Name" value="{{$customer->fname}}"/>

      @error('fname')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>


<div class="col-sm-6">
     <div class="form-group">
      <label>Last Name:</label>
      
      <input type="text" name="lname" class="form-control form-control-solid @error('lname') is-invalid @enderror" placeholder="Enter Last Name" value="{{$customer->lname}}"/>
      @error('lname')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>
                                 <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Select Gender</label>
                                    
                                    <select name="gender" id="gender" class="form-control form-control-solid @error('gender') is-invalid @enderror"
                                            >
                                        <option selected disabled="">Select  Gender</option>
                                        <option value="male" @if($customer->gender=='male')selected @endif>Male</option>
                                        <option value="female" @if($customer->gender=='female')selected @endif>Female</option>
                                        <option value="others" @if($customer->gender=='others')selected @endif>Others</option>
                                    </select>
                                     @error('gender')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
                                </div>
                              </div>
                            
     <div class="col-md-6">
      <div class="form-group">
       <label>Date Of Birth</label>
      <input type="date" name="dob" class="form-control form-control-solid @error('dob') is-invalid @enderror" placeholder="Select your Birth Date" value="{{$customer->dob}}"/>
     
      @error('dob')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror 
     </div>
   </div>
<div class="col-md-6">
     <div class="form-group">
      <label>Email address:</label>
      
      <input type="email" name="email" class="form-control form-control-solid @error('email') is-invalid @enderror" placeholder="Enter email" value="{{$customer->email}}"/>
      @error('email')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
</div>



<div class="col-md-6">
     <div class="form-group">
      <label>Phone Number:</label>
      
      <input type="text" name="phone" class="form-control form-control-solid @error('phone') is-invalid @enderror" placeholder="Enter Phone Number" value="{{$customer->phone}}"/>
      @error('phone')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
</div>
<div class="col-md-6">
      <div class="form-group">
      <label>Mobile Number:</label>
      
      <input type="text" name="mobile" class="form-control form-control-solid @error('mobile') is-invalid @enderror" placeholder="Enter Mobile Number" value="{{$customer->mobile}}"/>
      @error('mobile')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>
     

     <div class="col-md-6">
     <div class="form-group">
                                    <label>Select your City</label>
                                    
                                    <select name="city"  class="form-control form-control-solid @error('city') is-invalid @enderror" value="{{$customer->city}}"
                                            >
                                        <option selected disabled="">Select  City</option>
                                        <option value="Kathmandu">Kathmandu</option>
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
                                    
                                    <select name="district"  class="form-control form-control-solid @error('district') is-invalid @enderror"  value="{{$customer->district}}"
                                            >
                                        <option selected disabled="">Select District</option>
                                        <option value="Kathmandu">Kathmandu</option>
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
      
      <input type="text" name="permanentaddress" class="form-control form-control-solid @error('permanentaddress') is-invalid @enderror" placeholder="Enter Permanent Address" value="{{$customer->permanentaddress}}"/>
     @error('permanentaddress')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
     </div>

     <div class="col-md-6">
     <div class="form-group">
      <label>Temporary Address</label>
      
      <input type="text" name="temporaryaddress" class="form-control form-control-solid @error('temporaryaddress') is-invalid @enderror" placeholder="Enter Temporary Address" value="{{$customer->temporaryaddress}}"/>
      @error('temporaryaddress')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
     </div>

     <div class="col-md-6">
      <div class="form-group">
                                    <label>Customer Type</label>
                                   
                                    <select name="customer_type"  class="form-control form-control-solid @error('customer_type') is-invalid @enderror"  value="{{$customer->customer_type}}"
                                            >
                                        <option selected disabled="">Select One</option>
                                        <option value="Organization"@if($customer->customer_type=='Organization')selected @endif>Organization</option>
                                        <option value="Individual" @if($customer->customer_type=='Individual')selected @endif>Individual</option>
                                        
                                    </select>
                                      @error('customer_type')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
                                </div>
                              </div>

    <div class="col-md-6">
     <div class="form-group">
                                    <label>Your Photo</label>
                                    
                                    <input type="hidden" name="current_image" value="{{$customer->image}}">
                                    <input type="file" class="form-control form-control-solid @error('image') is-invalid @enderror" name="image">
                                   @error('image')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
                                </div>
                              </div>
<div class="col-md-6">
     <div class="form-group">
                                    <label>Front Citizenship Photo</label>
                                    
                                    <input type="hidden" name="current_frontcitizenshipimage">
                                    <input type="file" class="form-control form-control-solid @error('frontcitizenshipimage') is-invalid @enderror"  name="frontcitizenshipimage"  value="{{$customer->frontcitizenshipimage}}">
                                    @error('frontcitizenshipimage')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
                                </div>
                              </div>

<div class="col-md-6">
     <div class="form-group">
                                    <label>Back Citizenship Photo</label>
                                    
                                    <input type="hidden" name="current_backcitizenshipimage">
                                    <input type="file" class="form-control form-control-solid @error('backcitizenshipimage') is-invalid @enderror"  name="frontcitizenshipimage"  value="{{$customer->backcitizenshipimage}}">
                                   @error('backcitizenshipimage')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
                                </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
                                   
                                    <input type="checkbox" value="1" id="Usercheck" name="ifuser"  checked>
                                    <span>Register For User</span>
                                     @error('ifuser')
                                   <p>Select this checkbox.</p>
                                        @enderror
                                </div>
    </div>
  </div>
  </div>
    <div class="card-footer">

          <input type="submit" value="update" class="btn btn-success">
          <input type="reset" value="reset" class="btn btn-danger">
        </div>
   </form>
</div>
@endsection
