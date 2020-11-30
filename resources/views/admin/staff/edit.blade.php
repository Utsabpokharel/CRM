@extends('admin.layouts.default')
@section('page_title','Add New Staff')
@section('content')
<div class="card-body card">
    <form class="form">
    <form method="post" action="{{ route('staff.store') }}">
    @csrf
    <div class="row">
      <div class="col-sm-6">
     <div class="form-group">
      <label>First Name</label>
      <span class="text-danger">*</span>
      <input type="text" class="form-control form-control-solid" placeholder="Enter First Name" value="{{$staff->fname}}" data-validation="required"/>
      <span class="form-text text-muted">Please enter your first name</span>
     </div>

     <div class="form-group">
      <label>Last Name</label>
      <span class="text-danger">*</span>
      <input type="text" class="form-control form-control-solid" placeholder="Enter Last Name" value="{{$staff->lname}}" data-validation-error-msg="Last name is required "/>
      <span class="form-text text-muted">Please enter your last name</span>
     </div>

     <div class="form-group">
      <label>Gender</label>
      <span class="text-danger">*</span>
      <select name="gender" id="gender" class="form-control form-control-solid" data-validation="required" data-validation-error-msg="Select Gender">
      <option selected disabled="">Select Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="others">Others</option>
      </select>
      <span class="form-text text-muted">Please select gender</span>
     </div>

     <div class="form-group">
      <label>Date of Birth</label>
      <span class="text-danger">*</span>
      <input type="date" class="form-control form-control-solid" value="{{$staff->dob}}" placeholder="Enter Date Of Birth" data-validation="required" data-validation-error-msg="Enter Date Of Birth"/>
      <span class="form-text text-muted">Please enter date of birth</span>
     </div>

     <div class="form-group">
      <label>Passport Size Photo</label>
      <input type="file" class="form-control form-control-solid" data-validation-allowing="jpg, png" data-validation-max-size="" data-validation="required"/>
      <span class="form-text text-muted">Please upload your passport size photo</span>
     </div>

     <div class="form-group">
      <label>Permanent Address</label>
      <span class="text-danger">*</span>
      <input type="text" class="form-control form-control-solid" value="{{$staff->permanent_address}}" placeholder="Enter Permanent Address" data-validation="required"/>
      <span class="form-text text-muted">Please enter permanent address</span>
    </div>

    <div class="form-group">
      <label>Temporary Address</label>
      <span class="text-danger">*</span>
      <input type="text" class="form-control form-control-solid" value="{{$staff->temporary_address}}" placeholder="Enter Temporary Address" data-validation="required"/>
      <span class="form-text text-muted">Please enter temporary address</span>
    </div>

    <div class="form-group">
      <label>City</label>
      <span class="text-danger">*</span>
      <select name="city" id="city" class="form-control form-control-solid" value="{{$staff->city}}"data-validation="required">
      <option selected value="">Please Select One...</option>
      </select>
      <span class="form-text text-muted">Please enter city</span>
    </div>

    <div class="form-group">
      <label>Phone Number</label>
      <input type="text" class="form-control form-control-solid" value="{{$staff->phoneno}}" placeholder="Enter Phone Number" data-validation="required"/>
      <span class="form-text text-muted">Please enter phone number</span>
    </div>

    <div class="form-group">
      <label>Mobile Number</label>
      <input type="text" class="form-control form-control-solid" value="{{$staff->mobileno}}" placeholder="Enter Mobile Number" data-validation="required"/>
      <span class="form-text text-muted">Please enter mobile number</span>
    </div>

    <div class="form-group">
      <label>Department</label>
      <span class="text-danger">*</span>
      <select name="department_id" id="department_id" class="form-control form-control-solid" value="{{$staff->department_id}}" data-validation="required">
      <option selected value="">Please Select...</option>
      </select>
      <span class="form-text text-muted">Please select department</span>
    </div>

    <div class="form-group">
      <label>Title</label>
      <span class="text-danger">*</span>
      <select name="title_id" id="title_id" class="form-control form-control-solid" value="{{$staff->title_id}}" data-validation="required">
      <option selected value="">Please Select...</option>
      </select>
      <span class="form-text text-muted">Please select department title</span>
    </div>
    </div>

    <div class="col-sm-6">
    <div class="form-group">
      <label>Level</label>
      <span class="text-danger">*</span>
      <select name="level_id" id="level_id" class="form-control form-control-solid" value="{{$staff->level_id}}" data-validation="required">
      <option selected value="">Please Select...</option>
      </select>
      <span class="form-text text-muted">Please select department level</span>
    </div>

    <div class="form-group">
      <label>PAN Number</label>
      <input type="number" class="form-control form-control-solid" value="{{$staff->panno}}" placeholder="Enter PAN Number" data-validation="required"/>
      <span class="form-text text-muted">Please enter pan number</span>
    </div>

    <div class="form-group">
      <label>Joined Date</label>
      <span class="text-danger">*</span>
      <input type="date" class="form-control form-control-solid" value="{{$staff->joined_date}}" placeholder="Enter Joined Date" data-validation="required"/>
      <span class="form-text text-muted">Please enter joined date</span>
    </div>

    <div class="form-group">
      <label>Email Address</label>
      <span class="text-danger">*</span>
      <input type="email" class="form-control form-control-solid" id="email" value="{{$staff->email}}" placeholder="Enter Email Address" data-validation="required"/>
      <span class="form-text text-muted">Please enter email address</span>
      <p id="emailExists" style="color: red; display: none">Email Already Exists In Our Database</p>
    </div>

    <div class="form-group">
      <label>Password</label>
      @error('password')
      <span>{{$message}}</span>
      @enderror
      <input type="password" class="form-control form-control-solid" id="pass" placeholder="Enter Password" name="password">
      <span class="form-text text-muted">Please enter password</span>
    </div>

    <div class="form-group">
      <label>Confirm Password</label>
      @error('confirm_password')
      <span>{{$message}}</span>
      @enderror
      <input type="password" class="form-control form-control-solid" id="password" placeholder="Confirm Password" name="confirm_password">
      <span class="form-text text-muted">Please enter password</span>
    </div>

    <div class="form-group">
      <label>ID Proof</label>
      <input type="file" class="form-control form-control-solid" data-validation="required"/>
      <span class="form-text text-muted">Please upload your id proof</span>
    </div>

    <div class="form-group">
      <label>Resume</label>
      <input type="file" class="form-control form-control-solid" data-validation="required"/>
      <span class="form-text text-muted">Please upload your resume</span>
    </div>

    <div class="form-group">
      <label>Offer Letter</label>
      <input type="file" class="form-control form-control-solid" data-validation="required"/>
      <span class="form-text text-muted">Please upload your offer letter</span>
    </div>

    <div class="form-group">
      <label>Joining Letter</label>
      <input type="file" class="form-control form-control-solid" data-validation="required"/>
      <span class="form-text text-muted">Please upload your joining letter</span>
    </div>
    
    <div class="form-group">
      <label>Contract and Agreement</label>
      <input type="file" class="form-control form-control-solid" data-validation-allowing="jpg, png" data-validation-max-size=""data-validation="required"/>
      <span class="form-text text-muted">Please upload your contract and agreement</span>
    </div>
    </div>

    <div class="form-group">
      <input type="checkbox" id="Usercheck" name="ifuser" checked>
      <span>Register For User</span>
    </div>
       
    <div class="card-footer">
     <button type="reset" class="btn btn-primary mr-2">Update</button>
     <button type="reset" class="btn btn-secondary">Cancel</button>
    </div>
   </form>
   </form>
</div>
@endsection
