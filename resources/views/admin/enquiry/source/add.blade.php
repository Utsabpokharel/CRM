@extends('admin.layouts.default')
@section('page_title','Add enquiry source')
@section('content')
    <div class="card-body card">
        <form action="{{route('EnquirySource.store')}}" class="form" method="post">
            @csrf
            <div class="form-group">
                <label>Source Name <span class="text-danger" style="font-size:20px;">*</span>:</label>
                <input type="name" class="form-control form-control-solid" placeholder="Enter full name" name="name" value="{{old('name')}}"
                />
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Description:</label>
                <textarea class="form-control form-control-solid" name="description" cols="30" rows="10">{{old('description')}}</textarea>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
@endsection
