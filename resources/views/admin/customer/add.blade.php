@extends('admin.layouts.default')
@section('page_title','Add Customer')
@section('content')
<div class="card-body card">
    <form class="form">

     <div class="form-group">
      <label>First Name:</label>
      <input type="text" class="form-control form-control-solid" placeholder="Enter First Name"/>
      <span class="form-text text-muted">Please enter your Name</span>
     </div>


     <div class="form-group">
      <label>Last Name:</label>
      <input type="text" class="form-control form-control-solid" placeholder="Enter Last Name"/>
      <span class="form-text text-muted">Please enter your Last Name</span>
     </div>
      

                                <div class="form-group">
                                    <label for="gender">Select Gender</label>
                                    <select name="gender" id="gender" class="form-control form-control-solid"  value=""
                                            >
                                        <option selected disabled="">Select  Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                     <span class="form-text text-muted">Please select your Gender</span>
                                </div>
                            

      <div class="form-group">
      <label>Date Of Birth</label>
      <input type="date" class="form-control form-control-solid" placeholder="Select your Birth Date"/>
      <span class="form-text text-muted">Please select your Birth Date </span>
     </div>


     <div class="form-group">
      <label>Email address:</label>
      <input type="email" class="form-control form-control-solid" placeholder="Enter email"/>
      <span class="form-text text-muted">We'll never share your email with anyone else</span>
     </div>

     <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control form-control-solid" placeholder="Enter password"/>
      <span class="form-text text-muted">Your password is hidden</span>
     </div>

     <div class="form-group">
      <label>Phone Number:</label>
      <input type="text" class="form-control form-control-solid" placeholder="Enter Phone Number"/>
      <span class="form-text text-muted">Please enter your Phone Number</span>
     </div>

      <div class="form-group">
      <label>Mobile Number:</label>
      <input type="text" class="form-control form-control-solid" placeholder="Enter Mobile Number"/>
      <span class="form-text text-muted">Please enter your Mobile Number</span>
     </div>
     
     <div class="form-group">
                                    <label>Select your City</label>
                                    <select name="city"  class="form-control form-control-solid"  value=""
                                            >
                                        <option selected disabled="">Select  City</option>
                                        <option value="Kathmandu">Kathamandu</option>
                                        <option value="Pokhara">Pokhara</option>
                                        <option value="Hetauda">Hetauda</option>
                                    </select>
                                     <span class="form-text text-muted">Please select your City</span>
                                </div>
     
      <div class="form-group">
                                    <label>Select your District</label>
                                    <select name="district"  class="form-control form-control-solid"  value=""
                                            >
                                        <option selected disabled="">Select District</option>
                                        <option value="Kathmandu">Kathamandu</option>
                                        <option value="Bhaktapur">Bhaktapur</option>
                                        <option value="Lalitpur">Laltipur</option>
                                    </select>
                                     <span class="form-text text-muted">Please select your District</span>
                                </div>
     
     <div class="form-group">
      <label>Permanent Address</label>
      <input type="text" class="form-control form-control-solid" placeholder="Enter Permanent Address"/>
      <span class="form-text text-muted">Please enter your Permanent Address</span>
     </div>
     
     <div class="form-group">
      <label>Temporary Address</label>
      <input type="text" class="form-control form-control-solid" placeholder="Enter Temporary Address"/>
      <span class="form-text text-muted">Please enter your Temporary Address</span>
     </div>
     
      <div class="form-group">
                                    <label>Please Select One</label>
                                    <select name="customer_type"  class="form-control form-control-solid"  value=""
                                            >
                                        <option selected disabled="">Select One</option>
                                        <option value="Organization">Organization</option>
                                        <option value="Individual">Individual</option>
                                        
                                    </select>
                                     <span class="form-text text-muted">Please select one</span>
                                </div>

      <div class="form-group">

                                    <input type="checkbox" id="Usercheck" name="ifuser"  checked>
                                    <span>Register For User</span>
                                </div>
    
     <div class="form-group">
                                    <label>Your Photo</label>
                                    <input type="hidden" name="image">
                                    <input type="file" class="form-control form-control-solid" id="image"name="image"  value="">
                                    <span class="form-text text-muted">Please upload your photo</span>
                                </div>

     <div class="form-group">
                                    <label>Front Citizenship Photo</label>
                                    <input type="hidden" name="image">
                                    <input type="file" class="form-control form-control-solid" id="image"name="image"  value="">
                                    <span class="form-text text-muted">Please upload your Front Citizenship Photo</span>
                                </div>


     <div class="form-group">
                                    <label>Back Citizenship Photo</label>
                                    <input type="hidden" name="image">
                                    <input type="file" class="form-control form-control-solid" id="image"name="image"  value="">
                                    <span class="form-text text-muted">Please upload your Back Citizenship Photo</span>
                                </div>
    </div>
    <div class="card-footer">
     <button type="reset" class="btn btn-primary mr-2">Submit</button>
     <button type="reset" class="btn btn-secondary">Cancel</button>

   </form>
</div>
@endsection
