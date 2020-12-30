@extends('admin.layouts.default')
@section('page_title',' Edit Staff')
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
                        <label>Gender</label>
                        <span class="text-danger">*</span>
                        <select name="gender" id="gender"
                                class="form-control form-control-solid @error('gender') is-invalid @enderror" value="{{old('gender', $staff->gender)}}">
                            <option value="male" @if($staff->gender=='male')selected @endif>Male</option>
                            <option value="female" @if($staff->gender=='female')selected @endif>Female</option>
                            <option value="others" @if($staff->gender=='others')selected @endif>Others</option>
                        </select>
                        @error('gender')
                        <span class="invalid-feedback" role="alert"> {{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control form-control-solid" name="phoneno"
                               value="{{$staff->phoneno}}"/>
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
                        <label>District</label>
                        <span class="text-danger">*</span>
                        <input type="text" name="district" list='districtname' class="form-control form-control-solid @error('district') is-invalid @enderror" value="{{$staff->district}}"
                                >
                                <datalist id='districtname'>
                                       @foreach($district as $districts)
                                            <option value="{{$districts->district_name}}"></option>
                                       @endforeach
                                </datalist>

                        @error('district')
                        <span class="invalid-feedback" role="alert"> {{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label> Designation Title</label>
                        <span class="text-danger">*</span>
                         @php
                                    $titleids=[];
                                    foreach($staff->title as $title)
                                    {
                                        array_push($titleids,$title->id);
                                    }

                                @endphp
                        <select name="title_id[]" id="title_id" class="form-control form-control-solid @error('title_id') is-invalid @enderror" value="{{$staff->title_id}}" multiple="multiple">
                              @foreach($titles as $key=>$title)
                                <option value="{{$title->id}}" class="form-control" @if(in_array($title->id,$titleids)) selected="selected" @endif>{{$title->title}}</option>
                              @endforeach
                        </select>

                        @error('title_id')
                        <span class="invalid-feedback" role="alert"> {{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                            <label> Designation Level</label>
                            <span class="text-danger">*</span>
                            <select name="level_id" id="level_id"
                                    class="form-control form-control-solid @error('level_id') is-invalid @enderror"
                                    name="level_id" value="{{$staff->level_id}}">


                                @foreach($levels as $skey=>$level)
                                    <option value="{{$level->id }}"}}>
                                        {{ $level->level }}
                                    </option>
                                @endforeach
                            </select>
                            @error('level_id')
                            <span class="invalid-feedback" role="alert"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Last Name</label>
                        <span class="text-danger">*</span>
                        <input type="text" class="form-control form-control-solid @error('lname') is-invalid @enderror"
                               name="lname" value="{{$staff->lname}}"/>
                        @error('lname')
                        <span class="invalid-feedback" role="alert"> {{$message}} </span>
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
                        <label>Mobile Number</label>
                        <span class="text-danger">*</span>
                        <input type="text" class="form-control form-control-solid" name="mobileno"
                               value="{{$staff->mobileno}}"/>
                        </div>

                        <div class="form-group">
                        <label>PAN Number</label>
                        <input type="number" class="form-control form-control-solid" name="panno"
                             value="{{$staff->panno}}" data-validation="required"/>
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
                        <label>City</label>
                        <span class="text-danger">*</span>
                        <input type="text" name='city' list='cityname' class="form-control form-control-solid @error('city') is-invalid @enderror" value="{{$staff->city}}">
                             <datalist id='cityname'>
                                       @foreach($city as $cities)
                                            <option value="{{$cities->city_name}}"> </option>
                                       @endforeach
                             </datalist>

                        @error('city')
                        <span class="invalid-feedback" role="alert"> {{$message}}</span>
                        @enderror
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
                        <a href="{{route('staff.view')}}" class="btn btn-danger mr-2">Cancel</a>
                    </div>
        </form>
    </div>
@endsection

@push('scripts')
<script srd="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js">
</script>
<script>
  $("#title_id").select2({
    placeholder: 'Please  Select...',
    multiple: true
  });
</script>
@endpush
