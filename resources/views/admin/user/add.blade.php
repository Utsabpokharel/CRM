@extends('admin.layouts.default')
@section('page_title','Add User')
@section('content')

<div class="card-body card">
  <form class="form" method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" name="name">
          {{-- <select name="name" id="name" class="form-control form-control-solid @error('name') is-invalid @enderror">
            <option value="">Select Name</option>
            @foreach($staffs as $name)
              <option value="{{$name->id}}" class="form-control">{{$name->fname}} {{$name->lname}}</option>
          @endforeach

          @foreach($vendors as $name)
          <option value="{{$name->id}}" class="form-control">{{$name->fname}} {{$name->lname}}</option>
          @endforeach

          @foreach($customers as $name)
          <option value="{{$name->id}}" class="form-control">{{$name->fname}} {{$name->lname}}</option>
          @endforeach
          </select> --}}
          @error('name')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Roles</label>
          <select name="roleid" id="role" class="form-control form-control-solid @error('roleid') is-invalid @enderror">
            <option value="">Select a Role</option>
            @foreach($roles as $roleid)
            <option value="{{$roleid->id}}" class="form-control">{{$roleid->name}}</option>
            @endforeach
          </select>
          @error('roleid')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Gender</label>
          <select name="gender" id="gender" class="form-control form-control-solid @error('gender') is-invalid @enderror">
            <option value="">Select a Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Others</option>
          </select>
          @error('gender')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Date of Birth</label>
          <input type="date" class="form-control form-control-solid @error('date_of_birth') is-invalid @enderror" name="date_of_birth" />
          @error('date_of_birth')
          <span class="invalid-feedback" role="alert"> {{$message}}</span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Phone Number</label>
          <input type="number" name="phone" class="form-control form-control-solid @error('phone') is-invalid @enderror" placeholder="Enter Phone Number" />
          @error('phone')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>


      <div class="col-md-6">
        <div class="form-group">
          <label>Mobile Number</label>
          <input type="number" name="mobileno" class="form-control form-control-solid @error('mobileno') is-invalid @enderror" placeholder="Enter Mobile Number" />
          @error('mobileno')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Email address</label>
          <input type="email" name="email" class="form-control form-control-solid @error('email') is-invalid @enderror" placeholder="Enter Email" />
          @error('email')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>PAN Number</label>
          <input type="number" class="form-control form-control-solid" name="panno" placeholder="Enter PAN Number" data-validation="required" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control form-control-solid @error('password') is-invalid @enderror" placeholder="Enter Password" />
          @error('password')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" name="confirm_password" class="form-control form-control-solid @error('confirm_password') is-invalid @enderror" placeholder="Enter Confirm Password" />
          @error('confirm_password')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Permanent Address</label>
          <input type="text" class="form-control form-control-solid @error('permanent_address') is-invalid @enderror" name="permanent_address" placeholder="Enter Permanent Address" />
          @error('permanent_address')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Temporary Address</label>
          <input type="text" class="form-control form-control-solid @error('temporary_address') is-invalid @enderror" name="temporary_address" placeholder="Enter Temporary Address" />
          @error('temporary_address')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>District</label>
          <input type="text" name='district' list='districtname' class="form-control form-control-solid @error('district') is-invalid @enderror" placeholder="Please Select...">
          <datalist id='districtname'>
            @foreach($district as $districts)
            <option value="{{$districts->district_name}}"> </option>
            @endforeach
          </datalist>
          @error('district')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>City</label>
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
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Designation Title</label>
          <select name="title" id="title" class="form-control form-control-solid @error('title') is-invalid @enderror" data-validation="required">
            <option selected value="">Please Select...</option>
            @foreach($titles as $title)
            <option value="{{$title->id}}" class="form-control">{{$title->title}}</option>
            @endforeach
          </select>

          @error('title')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Department</label>
          <select name="department" id="department" class="form-control form-control-solid @error('department') is-invalid @enderror" data-validation="required">
            <option selected value="">Please Select...</option>
            @foreach($departments as $department)
            <option value="{{$department->id}}" class="form-control">{{$department->dep_name}}</option>
            @endforeach
          </select>
          @error('department')
          <span class="invalid-feedback" role="alert"> {{$message}}</span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Designation Level</label>
          <select name="level" id="level" class="form-control form-control-solid @error('level') is-invalid @enderror" data-validation="required">
            <option selected value="">Please Select...</option>
            @foreach($levels as $level)
            <option value="{{$level->id}}" class="form-control">{{$level->level}}</option>
            @endforeach
          </select>
          @error('level')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Joined Date</label>
          <input type="date" class="form-control form-control-solid @error('joined_date') is-invalid @enderror" name="joined_date" />
          @error('joined_date')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary mr-2" value="submit">Add</button>
      <button type="reset" class="btn btn-secondary" value="reset">Reset</button>
      <a href="{{route('user.view')}}" class="btn btn-danger mr-2">Cancel</a>
    </div>
  </form>
</div>
@endsection