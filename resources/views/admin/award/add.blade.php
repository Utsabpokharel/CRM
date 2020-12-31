@extends('admin.layouts.default')
@section('page_title','Add Award')
@section('content')


<div class="card-body card">
    <form method="post" action="{{ route('award.store') }}">
    @csrf
     <div class="form-group">
      <label>Staff Name</label>
      <span class="text-danger">*</span>
      <select name="staff" id="staff" class="form-control form-control-solid @error('staff') is-invalid @enderror" name="staff" data-validation="required">
            <option selected disabled="">Please Select... </option>
            @foreach($staffs as $staff)
            <option value="{{$staff->id}}" class="form-control">{{$staff->fname}} {{$staff->lname}}</option>
            @endforeach
      </select>

      @error('staff')
      <span class="invalid-feedback" role="alert"> {{$message}} </span>
      @enderror
     </div>

     <div class="form-group">
      <label>Award Name</label>
      <span class="text-danger">*</span>
      <input type="text" class="form-control form-control-solid @error('award') is-invalid @enderror" name="award" placeholder="Enter Award Name" data-validation="required">
      @error('award')
      <span class="invalid-feedback" role="alert"> {{$message}} </span>
      @enderror
     </div>

     <div class="form-group">
      <label>Gift</label>
      <input type="text" class="form-control form-control-solid" name="gift" placeholder="Enter Gift">
     </div>

     <div class="form-group">
      <label>Award Date</label>
      <span class="text-danger">*</span>
      <input type="date" class="form-control form-control-solid @error('date') is-invalid @enderror" name="date" placeholder="Enter Gift">
      @error('date')
      <span class="invalid-feedback" role="alert"> {{$message}} </span>
      @enderror
     </div>



     <div class="card-footer">
     <button type="submit" class="btn btn-primary mr-2">Submit</button>
     <button type="reset" class="btn btn-danger mr-2">Reset</button>
    </div>
    </form>
</div>
@endsection
