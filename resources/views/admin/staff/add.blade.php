@extends('admin.layouts.default')
@section('page_title','Add New Staff')
@section('content')

<!-- <style type='text/css'>
.red{
    color:red;
    font-size:12px;
}
</style> -->


<div class="card-body card">
    <form method="post" action="{{ route('staff.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-sm-6">
     <div class="form-group">
      <label>First Name</label>
      <span class="text-danger">*</span>
      <input type="text" class="form-control form-control-solid @error('fname') is-invalid @enderror" name="fname" placeholder="Enter First Name"/>
      @error('fname')
      <span class="invalid-feedback" role="alert"> {{$message}} </span>
      @enderror
     </div>

     <div class="form-group">
      <label>Last Name</label>
      <span class="text-danger">*</span>
      <input type="text" class="form-control form-control-solid @error('lname') is-invalid @enderror" name="lname" placeholder="Enter Last Name"/>
      @error('lname')
      <span class="invalid-feedback" role="alert"> {{$message}} </span>
      @enderror
     </div>

     <div class="form-group">
      <label>Gender</label>
      <span class="text-danger">*</span>
      <select name="gender" id="gender" class="form-control form-control-solid @error('gender') is-invalid @enderror" name="gender" data-validation="required">
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
      <label>Date of Birth</label>
      <span class="text-danger">*</span>
      <input type="date" class="form-control form-control-solid @error('dob') is-invalid @enderror" name="dob" placeholder="Enter Date Of Birth"/>
      @error('dob')
      <span class="invalid-feedback" role="alert"> {{$message}} </span>
      @enderror
     </div>

     <div class="form-group">
      <label>Passport Size Photo</label>
      <input type="file" class="form-control form-control-solid" name="pp_photo"/>
     </div>

     <div class="form-group">
      <label>Permanent Address</label>
      <span class="text-danger">*</span>
      <input type="text" class="form-control form-control-solid @error('permanent_address') is-invalid @enderror" name="permanent_address" placeholder="Enter Permanent Address"/>
      @error('permanent_address')
      <span class="invalid-feedback" role="alert"> {{$message}} </span>
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
      <select name="city" id="city" class="form-control form-control-solid @error('city') is-invalid @enderror" name="city">
      <option selected value="">Please Select One...</option>
      <option value="abcd">abcd</option>
      </select>
      @error('city')
      <span class="invalid-feedback" role="alert"> {{$message}} </span>
      @enderror
    </div>

    <div class="form-group">
      <label>Phone Number</label>
      <input type="number" class="form-control form-control-solid" name="phoneno" placeholder="Enter Phone Number" data-validation="required"/>
    </div>

    <div class="form-group">
      <label>Mobile Number</label>
      <input type="number" class="form-control form-control-solid" name="mobileno" placeholder="Enter Mobile Number" data-validation="required"/>
    </div>

    <div class="form-group">
      <label>Department</label>
      <span class="text-danger">*</span>
      <select name="department_id" id="department_id" class="form-control form-control-solid @error('department_id') is-invalid @enderror" name="department_id" data-validation="required">
      <option selected value="">Please Select...</option>
      @foreach($departments as $department)
      <option value="{{$department->id}}" class="form-control">{{$department->dep_name}}</option>
      @endforeach
      </select>
      
      @error('department_id')
      <span class="invalid-feedback" role="alert"> {{$message}} </span>
      @enderror
    </div>

    <div class="form-group">
      <label>Title</label>
      <span class="text-danger">*</span>
      <select name="title_id" id="title_id" class="form-control form-control-solid @error('title_id') is-invalid @enderror" name="title_id"data-validation="required">
      <option selected value="">Please Select...</option>
      <option value="1">abcd</option>
      </select>
      
      @error('title_id')
      <span class="invalid-feedback" role="alert"> {{$message}} </span>
      @enderror
    </div>
    </div>

    <div class="col-sm-6">
    <div class="form-group">
      <label>Level</label>
      <span class="text-danger">*</span>
      <select name="level_id" id="level_id" class="form-control form-control-solid @error('level_id') is-invalid @enderror" name="level_id" data-validation="required">
      <option selected value="">Please Select...</option>
      <option value="1">abcd</option>
      </select>
      
      @error('level_id')
      <span class="invalid-feedback" role="alert"> {{$message}} </span>
      @enderror
     </div>

    <div class="form-group">
      <label>PAN Number</label>
      <input type="number" class="form-control form-control-solid" name="panno" placeholder="Enter PAN Number" data-validation="required"/>
    </div>

    <div class="form-group">
      <label>Joined Date</label>
      <span class="text-danger">*</span>
      <input type="date" class="form-control form-control-solid @error('joined_date') is-invalid @enderror" name="joined_date" placeholder="Enter Joined Date"/>
      @error('joined_date')
      <span class="invalid-feedback" role="alert"> {{$message}} </span>
      @enderror
    </div>

    <div class="form-group">
      <label>Email Address</label>
      <span class="text-danger">*</span>
      <input type="email" class="form-control form-control-solid @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Email Address"/>
      @error('email')
      <span class="invalid-feedback" role="alert"> {{$message}}</span>
      @enderror
      <p id="emailExists" style="color: red; display: none">Email Already Exists In Our Database</p>
    </div>

    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control form-control-solid @error('password') is-invalid @enderror" id="pass" name="password" placeholder="Enter Password"/>
      @error('password')
      <span class="invalid-feedback" role="alert"> {{$message}}</span>
      @enderror
    </div>

    <div class="form-group">
      <label>Confirm Password</label>
      <input type="password" class="form-control form-control-solid @error('confirm_password') is-invalid @enderror" id="password" name="confirm_password" placeholder="Confirm Password"/>
      @error('confirm_password')
      <span class="invalid-feedback" role="alert"> {{$message}}</span>
      @enderror
    </div>

    <div class="form-group">
      <label>ID Proof</label>
      <input type="file" class="form-control form-control-solid" name="id_proof" data-validation="required"/>
    </div>

    <div class="form-group">
      <label>Resume</label>
      <input type="file" class="form-control form-control-solid" name="resume" data-validation="required"/>
    </div>

    <div class="form-group">
      <label>Offer Letter</label>
      <input type="file" class="form-control form-control-solid" name="offer_letter" data-validation="required"/>
    </div>

    <div class="form-group">
      <label>Joining Letter</label>
      <input type="file" class="form-control form-control-solid" name="joining_letter" data-validation="required"/>
    </div>
    
    <div class="form-group">
      <label>Contract and Agreement</label>
      <input type="file" class="form-control form-control-solid" name="contract_agreement" data-validation="required"/>
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

