@extends('admin.layouts.default')
@section('page_title','Add Title')
@section('content')
<div class="card-body card">
    <form class="form">

     <div class="form-group">
      <label>Full Name:</label>
      <input type="email" class="form-control form-control-solid" placeholder="Enter full name"/>
      <span class="form-text text-muted">Please enter your full name</span>
     </div>
     <div class="form-group">
      <label>Email address:</label>
      <input type="email" class="form-control form-control-solid" placeholder="Enter email"/>
      <span class="form-text text-muted">We'll never share your email with anyone else</span>
     </div>
     <div class="form-group">
      <label>Subscription</label>
      <div class="input-group input-group-lg">
       <div class="input-group-prepend"><span class="input-group-text" >$</span></div>
       <input type="text" class="form-control form-control-solid" placeholder="99.9"/>
      </div>
     </div>
     <div class="form-group">
      <label>Communication:</label>
      <div class="checkbox-list">
       <label class="checkbox">
        <input type="checkbox"/>
        <span></span>
        Email
       </label>
       <label class="checkbox">
        <input type="checkbox"/>
        <span></span>
        SMS
       </label>
       <label class="checkbox">
        <input type="checkbox"/>
        <span></span>
        Phone
       </label>
      </div>
     </div>
    </div>
    <div class="card-footer">
     <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <a href="{{route('title.index')}}" class="btn btn-secondary"> Cancel</a>

   </form>
</div>
@endsection