@extends('admin.layouts.default')
@section('page_title','Edit Department')
@section('content')
<div class="card-body card">
    <form class="form" action="{{route('update_department',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Department Name:</label>
            <input type="text" class="form-control form-control-solid" name="dep_name" value="{{$data->dep_name}}" />
            <span class="form-text text-muted">Would you like to make change Department Name?</span>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea name="dep_description" cols="30" rows="10" class="form-control form-control-solid">{{$data->dep_description}}</textarea>
            <span class="form-text text-muted">Would you like to make change Department Description?</span>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
    </form>
</div>
@endsection