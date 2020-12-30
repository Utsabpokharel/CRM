@extends('admin.layouts.default')
@section('page_title','Edit Department')
@section('content')
<div class="card-body card">
    <form class="form" action="{{route('update_department',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Department Name:</label>
            <input type="text" class="form-control form-control-solid @error('dep_name') is-invalid @enderror" name="dep_name" value="{{$data->dep_name}}" />
            @error('dep_name')
            <span class="invalid-feedback" role="alert"> {{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea name="dep_description" cols="30" rows="10" class="form-control form-control-solid">{{$data->dep_description}}</textarea>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success mr-2">Update</button>
            <a href="{{route('view_department')}}" class="btn btn-primary">Back</a>

    </form>
</div>
@endsection
