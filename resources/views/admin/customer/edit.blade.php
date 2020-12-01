@extends('admin.layouts.default')
@section('page_title','Add Customer')
@section('content')
<style type="text/css">
  p{
    color:red;
   
  }

</style>

<div class="card-body card">
    <form class="form" method="post" action="{{route('customer.update',$customer->id)}}" enctype="multipart/form-data">
     @csrf
     @method('put')
      <div class="row">

<div class="col-sm-6">
     <div class="form-group">
      <label>First Name:</label>


      <input type="text" name="fname" class="form-control form-control-solid" placeholder="Enter First Name"/>
      @error('fname')
          <p>The First Name is required.</p>
          @enderror
     </div>
   </div>



<div class="col-sm-6">
     <div class="form-group">
      <label>Last Name:</label>
      
      <input type="text" name="lname" class="form-control form-control-solid" placeholder="Enter Last Name"/>
      @error('lname')
      <p>The Last Name is required.</p>
      @enderror
     </div>
   </div>
 

    

      
                                 <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Select Gender</label>
                                    
                                    <select name="gender" id="gender" class="form-control form-control-solid"  value=""
                                            >
                                        <option selected disabled="">Select  Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                     @error('gender')
                                    <p>The Gender is required.</p>
                                    @enderror
                                </div>
                              </div>
                            
     <div class="col-md-6">
      <div class="form-group">
      
      <input type="date" name="dob" class="form-control form-control-solid" placeholder="Select your Birth Date"/>
      <label>Date Of Birth</label>
      @error('dob')
      <p>The Date of Birth is required.</p>
      @enderror
     </div>
   </div>
<div class="col-md-6">
     <div class="form-group">
      <label>Email address:</label>
      
      <input type="email" name="email" class="form-control form-control-solid" placeholder="Enter email"/>
      @error('email')
      <p>The Email is required.</p>
      @enderror
     </div>
</div>

<div class="col-md-6">
     <div class="form-group">
      <label>Password:</label>
      
      <input type="password" name="password" class="form-control form-control-solid" placeholder="Enter password"/>
      @error('password')
      <p>The Password is required.</p>
      @enderror
     </div>
</div>

<div class="col-md-6">
     <div class="form-group">
      <label>Phone Number:</label>
      
      <input type="text" name="phone" class="form-control form-control-solid" placeholder="Enter Phone Number"/>
      @error('phone')
      <p>The Phone Number is required.</p>
      @enderror
     </div>
</div>
<div class="col-md-6">
      <div class="form-group">
      <label>Mobile Number:</label>
      
      <input type="text" name="mobile" class="form-control form-control-solid" placeholder="Enter Mobile Number"/>
      @error('mobile')
      <p>The Mobile Number is required.</p>
      @enderror
     </div>
   </div>
     

     <div class="col-md-6">
     <div class="form-group">
                                    <label>Select your City</label>
                                    
                                    <select name="city"  class="form-control form-control-solid"  value=""
                                            >
                                        <option selected disabled="">Select  City</option>
                                        <option value="Kathmandu">Kathamandu</option>
                                        <option value="Pokhara">Pokhara</option>
                                        <option value="Hetauda">Hetauda</option>
                                    </select>
                                     @error('city')
                                 <p>Select your city.</p>
                                   @enderror
                                </div>
                              </div>
     <div class="col-md-6">
      <div class="form-group">
                                    <label>Select your District</label>
                                    
                                    <select name="district"  class="form-control form-control-solid"  value=""
                                            >
                                        <option selected disabled="">Select District</option>
                                        <option value="Kathmandu">Kathamandu</option>
                                        <option value="Bhaktapur">Bhaktapur</option>
                                        <option value="Lalitpur">Laltipur</option>
                                    </select>
                                     @error('district')
                                <p>Select your district.</p>
                                          @enderror
                                </div>
                              </div>
     <div class="col-md-6">
     <div class="form-group">
      <label>Permanent Address</label>
      
      <input type="text" name="permanentaddress" class="form-control form-control-solid" placeholder="Enter Permanent Address"/>
      @error('permanentaddress')
      <p>The Permanent Address is required.</p>
      @enderror
     </div>
     </div>

     <div class="col-md-6">
     <div class="form-group">
      <label>Temporary Address</label>
      
      <input type="text" name="temporaryaddress" class="form-control form-control-solid" placeholder="Enter Temporary Address"/>
      @error('temporaryaddress')
      <p>The Temporary Address is required.</p>
      @enderror
     </div>
     </div>

     <div class="col-md-6">
      <div class="form-group">
                                    <label>Please Select One</label>
                                   
                                    <select name="customer_type"  class="form-control form-control-solid"  value=""
                                            >
                                        <option selected disabled="">Select One</option>
                                        <option value="Organization">Organization</option>
                                        <option value="Individual">Individual</option>
                                        
                                    </select>
                                      @error('customer_type')
                               <p>The Field is not Selected .</p>
                                     @enderror
                                </div>
                              </div>

    <div class="col-md-6">
     <div class="form-group">
                                    <label>Your Photo</label>
                                    
                                    <input type="hidden" name="image">
                                    <input type="file" class="form-control form-control-solid" name="image"  value="">
                                   @error('image')
                                <p>The image is required.</p>
                                   @enderror
                                </div>
                              </div>
<div class="col-md-6">
     <div class="form-group">
                                    <label>Front Citizenship Photo</label>
                                    
                                    <input type="hidden" name="image">
                                    <input type="file" class="form-control form-control-solid"  name="frontcitizenshipimage"  value="">
                                    @error('frontcitizenshipimage')
                                   <p>The Front Citizenship photo is required.</p>
                                        @enderror
                                </div>
                              </div>

<div class="col-md-6">
     <div class="form-group">
                                    <label>Back Citizenship Photo</label>
                                    
                                    <input type="hidden" name="image">
                                    <input type="file" class="form-control form-control-solid"  name="frontcitizenshipimage"  value="">
                                   @error('backcitizenshipimage')
                                   <p>The Back Citizenship photo is required.</p>
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
