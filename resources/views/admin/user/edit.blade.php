@extends('admin.layouts.default')
@section('page_title','Edit User')
@section('content')
<div class="card-body card">
  <form class="form" method="post" action="{{route('user.update',$user->id)}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label>Email address</label>
              {{-- <input type="email" name="email" class="form-control form-control-solid @error('email') is-invalid @enderror" placeholder="Enter Email" /> --}}
              <select name="email" id="email" class="form-control form-control-solid @error('email') is-invalid @enderror" value="{{$user->email}}">
                
                @foreach($staffs as $name)
                <option value="{{$name->email}}" class="form-control">{{$name->email}}</option>
                @endforeach

                @foreach($vendors as $name)
                <option value="{{$name->email}}" class="form-control">{{$name->email}}</option>
                @endforeach

                @foreach($customers as $name)
                <option value="{{$name->email}}" class="form-control">{{$name->email}}</option>
                @endforeach
              </select>
              @error('email')
              <span class="invalid-feedback" role="alert"> {{$message}} </span>
              @enderror
            </div>
          </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Name</label>
          {{--<input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" name="name"> --}}
          <select name="name" id="name" class="form-control form-control-solid @error('name') is-invalid @enderror" value="{{$user->fname}} {{$user->lname}}">
         
            @foreach($staffs as $name)
            <option value="{{$name->fname}} {{$name->lname}}" class="form-control">{{$name->fname}} {{$name->lname}}</option>
            @endforeach

            @foreach($vendors as $name)
            <option value="{{$name->fname}} {{$name->lname}}" class="form-control">{{$name->fname}} {{$name->lname}}</option>
            @endforeach

            @foreach($customers as $name)
            <option value="{{$name->fname}} {{$name->lname}}" class="form-control">{{$name->fname}} {{$name->lname}}</option>
            @endforeach
          </select>
          @error('name')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Roles</label>
          <select name="roleid" id="role" class="form-control form-control-solid @error('roleid') is-invalid @enderror" value="{{$user->role}}">
          
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
          <label>Department</label>
          <select name="department" id="department" class="form-control form-control-solid @error('department') is-invalid @enderror" data-validation="required" value="{{$user->department}}">
         
            @foreach($departments as $department)
            <option value="{{$department->id}}" class="form-control">{{$department->dep_name}}</option>
            @endforeach
          </select>
          @error('department')
          <span class="invalid-feedback" role="alert"> {{$message}}</span>
          @enderror
        </div>
      </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary mr-2" value="submit">Update</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>
</div>
@endsection
