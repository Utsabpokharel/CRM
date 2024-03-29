@extends('admin.layouts.default')
@section('page_title','General Setting')
@section('content')
<style type="text/css">
  img{
    width: 300px;
    height: 300px;
    }
    input[type=file]{
    padding:10px;
    background:#2d2d2d;}
</style>

<div class="card-body card">
@if($general == [])
    <form class="form" method="post" action="{{route('general.store')}}" enctype="multipart/form-data">
     @csrf
     <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
      <div class="row">
<div class="col-sm-6">
    <div class="col-md-12">
     <div class="form-group">
        <label>Website Logo</label>
            <input type="file" class="form-control form-control-solid @error('website_logo') is-invalid @enderror" name="website_logo"  value="{{old('website_logo')}}" onchange="readURL(this);">
                <img id="blah" src=""/ width="300px" height="300px">
                    <script >
                        function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#blah')
                                        .attr('src', e.target.result);
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
            @error('website_logo')
                <span class="invalid-feedback" role="alert">{{$message}}</span>
            @enderror
        </div>
    </div>


    <div class="col-sm-12">

     <div class="form-group">
      <label>Website Name</label>
      <input type="text" name="website_name" class="form-control form-control-solid @error('website_name') is-invalid @enderror" placeholder="Enter Website Name" value="{{old('website_name')}}"/>
      @error('website_name')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
      @enderror
     </div>
    </div>



    <div class="col-sm-12">
     <div class="form-group">
      <label>Website</label>

      <input type="text" name="website" class="form-control form-control-solid @error('website') is-invalid @enderror" placeholder="Enter Website" value="{{old('website')}}"/>
      @error('website')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
    </div>
    <div class="col-md-12">
     <div class="form-group">
      <label>Email address</label>

      <input type="email" name="email" class="form-control form-control-solid @error('email') is-invalid @enderror" placeholder="Enter email" value="{{old('email')}}"/>
      @error('email')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
     <div class="card-footer">
        <input type="submit" value="Add" class="btn btn-success">
        <input type="reset" value="Reset" class="btn btn-danger">
    </div>

@endif

@if($general != null)
<form class="form" method="post" action="{{route('general.update',$general->id)}}" enctype="multipart/form-data">
     @csrf
     <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
<div class="row">
 <div class="col-sm-6">
    <div class="col-md-12">
        <div class="form-group">
            <label>Website Logo</label>
                <input type="file" class="form-control form-control-solid @error('website_logo') is-invalid @enderror" name="website_logo"  value="{{old('website_logo')}}" onchange="readURL(this);">
                <img id="blah" src=""/>

            <script>function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            </script>
            @error('website_logo')
                <span class="invalid-feedback" role="alert">{{$message}}</span>
            @enderror
        </div>
    </div>


    <div class="col-sm-12">

     <div class="form-group">
      <label>Website Name</label>
      <input type="text" name="website_name" class="form-control form-control-solid @error('website_name') is-invalid @enderror" placeholder="Enter Website Name" value="{{old('website_name',$general->website_name)}}"/>
      @error('website_name')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
      @enderror
     </div>
   </div>



    <div class="col-sm-12">
     <div class="form-group">
      <label>Website</label>

      <input type="text" name="website" class="form-control form-control-solid @error('website') is-invalid @enderror" placeholder="Enter Website" value="{{old('website',$general->website)}}"/>
      @error('website')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>

    <div class="col-md-12">
     <div class="form-group">
      <label>Email address</label>

      <input type="email" name="email" class="form-control form-control-solid @error('email') is-invalid @enderror" placeholder="Enter email" value="{{old('email',$general->email)}}"/>
      @error('email')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
    <div class="card-footer">
          <input type="submit" value="Update" class="btn btn-success">
          <input type="reset" value="Reset" class="btn btn-danger">
    </div>
    </form>
@endif
</div>
@endsection
