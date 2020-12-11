@extends('admin.layouts.default')
@section('page_title',' Update Staff')
@section('content')

    <div class="card-body card">
        <form method="post" action="{{ route('staff.update',$staff->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>First Name</label>
                        <span class="text-danger">*</span>
                        <input type="text" class="form-control form-control-solid @error('fname') is-invalid @enderror"
                               name="fname" placeholder="Enter First Name" value="{{$staff->fname}}"/>
                        @error('fname')
                        <span class="invalid-feedback" role="alert"> {{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <span class="text-danger">*</span>
                        <input type="email" class="form-control form-control-solid @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{$staff->email}}"/>
                        @error('email')
                        <span class="invalid-feedback" role="alert"> {{$message}}</span>
                        @enderror
                        <p id="emailExists" style="color: red; display: none">Email Already Exists In Our Database</p>
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control form-control-solid @error('confirm_password') is-invalid @enderror"
                                   id="password" name="confirm_password"/>
                        @error('confirm_password')
                        <span class="invalid-feedback" role="alert"> {{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Date of Birth</label>
                        <span class="text-danger">*</span>
                        <input type="date" class="form-control form-control-solid @error('dob') is-invalid @enderror"
                               name="dob" value="{{$staff->dob}}"/>
                        @error('dob')
                        <span class="invalid-feedback" role="alert"> {{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Temporary Address</label>
                        <span class="text-danger">*</span>
                        <input type="text"
                               class="form-control form-control-solid @error('temporary_address') is-invalid @enderror"
                               name="temporary_address" value="{{$staff->temporary_address}}"/>
                        @error('temporary_address')
                        <span class="invalid-feedback" role="alert"> {{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>District</label>
                        <span class="text-danger">*</span>
                        <select name="district" id="district" class="form-control form-control-solid @error('district') is-invalid @enderror" name="district"
                                value="{{$staff->district}}">
                            <option selected value="">Please Select One...</option>
                            <option value="abcd">abcd</option>
                        </select>
                        @error('district')
                        <span class="invalid-feedback" role="alert"> {{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" class="form-control form-control-solid" name="mobileno"
                               value="{{$staff->mobileno}}"/>
                    </div>

                    <div class="form-group">
                        <label> Designation Title</label>
                        <span class="text-danger">*</span>
                        <select name="title_id" id="title_id" class="form-control form-control-solid @error('title_id') is-invalid @enderror"
                                name="title_id" value="{{$staff->title_id}}">
                              <option selected value="">Please Select...</option>
                              @foreach($titles as $title)
                                <option value="{{$title->id}}" class="form-control">{{$title->title}}</option>
                              @endforeach
                        </select>

                        @error('title_id')
                        <span class="invalid-feedback" role="alert"> {{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label>PAN Number</label>
                      <input type="number" class="form-control form-control-solid" name="panno"
                          value="{{$staff->panno}}"/>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Last Name</label>
                        <span class="text-danger">*</span>
                        <input type="text" class="form-control form-control-solid @error('lname') is-invalid @enderror"
                               name="lname" placeholder="Enter Last Name" value="{{$staff->lname}}"/>
                        @error('lname')
                        <span class="invalid-feedback" role="alert"> {{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control form-control-solid @error('password') is-invalid @enderror"
                                id="pass" name="password" value="{{$staff->password}}"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert"> {{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <span class="text-danger">*</span>
                        <select name="gender" id="gender"
                                class="form-control form-control-solid @error('gender') is-invalid @enderror"
                                name="gender">
                            <option selected disabled="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                        @error('gender')
                        <span class="invalid-feedback" role="alert"> {{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Permanent Address</label>
                        <span class="text-danger">*</span>
                        <input type="text"
                               class="form-control form-control-solid @error('permanent_address') is-invalid @enderror"
                               name="permanent_address" value="{{$staff->permanent_address}}"/>
                        @error('permanent_address')
                        <span class="invalid-feedback" role="alert"> {{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <span class="text-danger">*</span>
                        <select name="city" id="city"
                                class="form-control form-control-solid @error('city') is-invalid @enderror" name="city"
                                value="{{$staff->city}}">
                            <option selected value="">Please Select One...</option>
                            <option value="abcd">abcd</option>
                        </select>
                        @error('city')
                        <span class="invalid-feedback" role="alert"> {{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control form-control-solid" name="phoneno"
                               value="{{$staff->phoneno}}"/>
                    </div>

                    <div class="form-group">
                        <label>Department</label>
                        <span class="text-danger">*</span>
                        <select name="department_id" id="department_id"
                                class="form-control form-control-solid @error('department_id') is-invalid @enderror"
                                name="department_id" value="{{$staff->department_id}}">
                            @foreach($departments as $department)
                                <option value="{{$department->id}}"
                                        class="form-control">{{$department->dep_name}}</option>
                            @endforeach
                        </select>

                        @error('department_id')
                        <span class="invalid-feedback" role="alert"> {{$message}} </span>
                        @enderror
                    </div>

                        <div class="form-group">
                            <label> Designation Level</label>
                            <span class="text-danger">*</span>
                            <select name="level_id" id="level_id"
                                    class="form-control form-control-solid @error('level_id') is-invalid @enderror"
                                    name="level_id" value="{{$staff->level_id}}">
                                <option selected value="">Please Select...</option>
                            @foreach($levels as $level)
                                <option value="{{$level->id}}" class="form-control">{{$level->level}}</option>
                            @endforeach
                            </select>

                            @error('level_id')
                            <span class="invalid-feedback" role="alert"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Joined Date</label>
                            <span class="text-danger">*</span>
                            <input type="date"
                                   class="form-control form-control-solid @error('joined_date') is-invalid @enderror"
                                   name="joined_date" value="{{$staff->joined_date}}"/>
                            @error('joined_date')
                            <span class="invalid-feedback" role="alert"> {{$message}}</span>
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
                            <label>Citizenship Proof (Backside)</label>
                            <input type="file" class="form-control form-control-solid" name="ctzn_back"/>
                        </div>

                        <div class="form-group">
                            <label>Offer Letter</label>
                            <input type="file" class="form-control form-control-solid" name="offer_letter"/>
                        </div>

                        <div class="form-group">
                            <label>Contract and Agreement</label>
                            <input type="file" class="form-control form-control-solid" name="contract_agreement"/>
                        </div>
                        </div>

                        <div class="col-sm-6">
                        <div class="form-group">
                            <label>Resume</label>
                            <input type="file" class="form-control form-control-solid" name="resume"/>
                        </div>

                        <div class="form-group">
                        <label>Citizenship Proof (Frontside)</label>
                        <input type="file" class="form-control form-control-solid" name="ctzn_front"
                               data-validation="required"/>
                        </div> 
                        
                        <div class="form-group">
                            <label>Joining Letter</label>
                            <input type="file" class="form-control form-control-solid" name="joining_letter"/>
                        </div>
                        </div>

                    <div class="form-group">
                        <input type="checkbox" id="Usercheck" value="1" name="ifuser" checked>
                        <span>Register For User</span>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button type="reset" class="btn btn-danger mr-2">Reset</button>
                    </div>
        </form>
    </div>
@endsection

