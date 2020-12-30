@extends('admin.layouts.default')
@section('page_title','Edit Title')
@section('content')
<div class="card-body card">
    <form class="form" action="{{route('title.update',$title->id)}}" method="post" autocomplete="on">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Title Name:</label>
            <input type="text" class="form-control form-control-solid @error('title') is-invalid @enderror"
            name="title" placeholder="Enter Title Name" value="{{old('title',$title->title)}}" />
            @error('title')
                <span class="invalid-feedback" role="alert">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control form-control-solid @error('description') is-invalid @enderror"
            placeholder="Enter description here" >{{old('description',$title->description)}}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">{{$message}}</span>
            @enderror
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success mr-2">Update</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="" class="btn btn-primary">Cancel</a>
    </form>
</div>
@endsection
