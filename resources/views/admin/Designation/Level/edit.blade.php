@extends('admin.layouts.default')
@section('page_title','Edit Level')
@section('content')
<div class="card-body card">
    <form class="form" action="{{route('level.update',$level->id)}}" method="post" autocomplete="on">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Level Name:</label>
            <input type="text" class="form-control form-control-solid @error('level') is-invalid @enderror"
            name="level" placeholder="Enter level Name" value="{{old('level',$level->level)}}" />
            @error('level')
                <span class="invalid-feedback" role="alert">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control form-control-solid @error('description') is-invalid @enderror"
            placeholder="Enter description here" >{{old('description',$level->description)}}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">{{$message}}</span>
            @enderror
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success mr-2">Update</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        <a href="{{route('level.index')}}" class="btn btn-primary">Cancel</a>
    </form>
</div>
@endsection
