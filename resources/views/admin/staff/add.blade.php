@extends('admin.layouts.default')
@section('page_title','Add New Staff')
@section('content')

<div class="card-body card">
    <form method="post" action="{{ route('staff.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>First Name</label>
                    <span class="text-danger">*</span>
                    <input type="text" class="form-control form-control-solid @error('fname') is-invalid @enderror" name="fname" placeholder="Enter First Name" />
                    @error('fname')
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
                    <label>Phone Number</label>
                    <input type="number" class="form-control form-control-solid" name="phoneno" placeholder="Enter Phone Number" data-validation="required" />
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <span class="text-danger">*</span>
                    <input type="email" class="form-control form-control-solid @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Email Address" />
                    @error('email')
                    <span class="invalid-feedback" role="alert"> {{$message}}</span>
                    @enderror
                    <p id="emailExists" style="color: red; display: none">Email Already Exists In Our Database</p>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <span class="text-danger">*</span>
                    <input type="password" class="form-control form-control-solid @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter Password" />
                    @error('password')
                    <span class="invalid-feedback" role="alert"> {{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Permanent Address</label>
                    <span class="text-danger">*</span>
                    <input type="text" class="form-control form-control-solid @error('permanent_address') is-invalid @enderror" name="permanent_address" placeholder="Enter Permanent Address" />
                    @error('permanent_address')
                    <span class="invalid-feedback" role="alert"> {{$message}} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>District</label>
                    <span class="text-danger">*</span>
                    <input type="text" name='district' list='districtname' class="form-control form-control-solid @error('disctrict') is-invalid @enderror" placeholder="Please Select...">
                    <datalist id='districtname'>
                        @foreach($district as $districts)
                        <option value="{{$districts->district_name}}"> </option>
                        @endforeach
                    </datalist>
                    @error('district')
                    <span class="invalid-feedback" role="alert"> {{$message}} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Designation Title</label>
                    <span class="text-danger">*</span>
                    <select name="title[]" id="title" multiple class="form-control form-control-solid @error('title_id') is-invalid @enderror" data-validation="required">
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
                    <label>Designation Level</label>
                    <span class="text-danger">*</span>
                    <select name="level_id" id="level_id" class="form-control form-control-solid @error('level_id') is-invalid @enderror" data-validation="required">
                        <option selected value="">Please Select...</option>
                        @foreach($levels as $level)
                        <option value="{{$level->id}}" class="form-control">{{$level->level}}</option>
                        @endforeach
                    </select>

                    @error('level_id')
                    <span class="invalid-feedback" role="alert"> {{$message}} </span>
                    @enderror
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>Last Name</label>
                    <span class="text-danger">*</span>
                    <input type="text" class="form-control form-control-solid @error('lname') is-invalid @enderror" name="lname" placeholder="Enter Last Name" />
                    @error('lname')
                    <span class="invalid-feedback" role="alert"> {{$message}} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Date of Birth</label>
                    <span class="text-danger">*</span>
                    <input type="date" class="form-control form-control-solid @error('dob') is-invalid @enderror" name="dob" />
                    @error('dob')
                    <span class="invalid-feedback" role="alert"> {{$message}} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Mobile Number</label>
                    <span class="text-danger">*</span>
                    <input type="number" class="form-control form-control-solid  @error('mobileno') is-invalid @enderror" name="mobileno" placeholder="Enter Mobile Number" data-validation="required" />
                    @error('mobileno')
                    <span class="invalid-feedback" role="alert"> {{$message}} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>PAN Number</label>
                    <input type="number" class="form-control form-control-solid" name="panno" placeholder="Enter PAN Number" data-validation="required" />
                </div>

                <div class="form-group">
                    <label>Confirm Password</label>
                    <span class="text-danger">*</span>
                    <input type="password" class="form-control form-control-solid @error('confirm_password') is-invalid @enderror" id="password" name="confirm_password" placeholder="Confirm Password" />
                    @error('confirm_password')
                    <span class="invalid-feedback" role="alert"> {{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Temporary Address</label>
                    <span class="text-danger">*</span>
                    <input type="text" class="form-control form-control-solid @error('temporary_address') is-invalid @enderror" name="temporary_address" placeholder="Enter Temporary Address" />
                    @error('temporary_address')
                    <span class="invalid-feedback" role="alert"> {{$message}} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>City</label>
                    <span class="text-danger">*</span>
                    <input type="text" name='city' list='cityname' class="form-control form-control-solid @error('city') is-invalid @enderror" placeholder="Please Select...">
                    <datalist id='cityname'>
                        @foreach($city as $cities)
                        <option value="{{$cities->city_name}}"> </option>
                        @endforeach
                    </datalist>
                    @error('city')
                    <span class="invalid-feedback" role="alert"> {{$message}} </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Department</label>
                    <span class="text-danger">*</span>
                    <select name="department_id" id="department_id" class="form-control form-control-solid @error('department_id') is-invalid @enderror" data-validation="required">
                        <option selected value="">Please Select...</option>
                        @foreach($departments as $department)
                        <option value="{{$department->id}}" class="form-control">{{$department->dep_name}}</option>
                        @endforeach
                    </select>

                    @error('department_id')
                    <span class="invalid-feedback" role="alert"> {{$message}} </span>
                    @enderror
                <div class="card-footer">
                <button type="submit" value="submit" class="btn btn-primary mr-2">Add</button>
                <button type="reset" class="btn btn-secondary mr-2" value="reset">Reset</button>
                <a href="{{route('staff.view')}}" class="btn btn-danger">Cancel</a>
                </div>



                <div class="form-group">
                    <label>Joined Date</label>
                    <span class="text-danger">*</span>
                    <input type="date" class="form-control form-control-solid @error('joined_date') is-invalid @enderror" name="joined_date" placeholder="Enter Joined Date" />
                    @error('joined_date')
                    <span class="invalid-feedback" role="alert"> {{$message}} </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-12">
                <center>
                    <h1 style="background-color:powderblue;">Documents</h1>
                </center>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>Passport Size Photo</label>
                    <input type="file" class="form-control form-control-solid" name="pp_photo" />
                </div>

                <div class="form-group">
                    <label>Citizenship Proof (Frontside)</label>
                    <input type="file" class="form-control form-control-solid" name="ctzn_front" data-validation="required" />
                </div>

                <div class="form-group">
                    <label>Offer Letter</label>
                    <input type="file" class="form-control form-control-solid" name="offer_letter" data-validation="required" />
                </div>

                <div class="form-group">
                    <label>Contract and Agreement</label>
                    <input type="file" class="form-control form-control-solid" name="contract_agreement" data-validation="required" />
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>Resume</label>
                    <input type="file" class="form-control form-control-solid" name="resume" data-validation="required" />
                </div>

                <div class="form-group">
                    <label>Citizenship Proof (Backside)</label>
                    <input type="file" class="form-control form-control-solid" name="ctzn_back" data-validation="required" />
                </div>

                <div class="form-group">
                    <label>Joining Letter</label>
                    <input type="file" class="form-control form-control-solid" name="joining_letter" data-validation="required" />
                </div>
            </div>

            <div class="form-group">
                <input type="checkbox" id="Usercheck" name="ifuser" value='1' checked>
                <span>Register For User</span>
            </div>
            <div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-danger mr-2">Reset</button>
                </div>
    </form>
</div>


@endsection
