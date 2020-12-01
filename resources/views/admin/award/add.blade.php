@extends('admin.layouts.default')
@section('page_title','Add Award')
@section('content')

<style type='text/css'>
.red{
    color:red;
    font-size:12px;
}
</style>

<div class="card-body card">
    <form method="post" action="{{ route('award.store') }}">
    @csrf
     <div class="form-group">
      <label>Staff Name</label>
      <span class="text-danger">*</span>
      <select name="staff" id="staff" class="form-control form-control-solid" name="staff" data-validation="required">
            <option selected disabled="">Select Staff</option>
            <option value="1">ram</option>
            <option value="2">hari</option>
      </select>
      @error('staff')
      <p class="red">The Field is Required.</p>
      @enderror
     </div>

     <div class="form-group">
      <label>Award Name</label>
      <span class="text-danger">*</span>
      <input type="text" class="form-control form-control-solid" name="award" placeholder="Enter Award Name" data-validation="required">
      @error('award')
      <p class="red">The Field is Required.</p>
      @enderror
     </div>

     <div class="form-group">
      <label>Gift</label>
      <input type="text" class="form-control form-control-solid" name="gift" placeholder="Enter Gift">
     </div>

     <div class="form-group">
      <label>Award Date</label>
      <span class="text-danger">*</span>
      <input type="date" class="form-control form-control-solid" name="date" placeholder="Enter Gift">
      @error('date')
      <p class="red">The Field is Required.</p>
      @enderror
     </div>

     <div class="form-group">
      <label>Thankyou Point</label>
      <textarea placeholder="Write Your Message Here" name="thankyou" class="form-control form-control-solid" name="thankyou"  rows="5"> </textarea>
     </div>

     <div class="card-footer">
     <button type="submit" class="btn btn-primary mr-2">Submit</button>
     <button type="reset" class="btn btn-danger mr-2">Reset</button>
    </div> 
    </form>
</div>
@endsection
