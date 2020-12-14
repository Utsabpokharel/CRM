@extends('admin.layouts.default')
@section('page_title','Add Customer')
@section('content')
<div class="card-body card">
    <form class="form" method="post" action="{{route('expenses.update',$expenses->id)}}" enctype="multipart/form-data">
     @csrf
<div class="row">
          <div class="col-sm-6">
            <div class="form-group">
           <label>Date:</label>
                   <input type="date" name="date" class="form-control form-control-solid" placeholder="Enter Date" value="{{$expenses->date}}"/>
                 <span class="form-text text-muted">Please enter Date</span>
             </div>
           </div>
           <div class="col-sm-6">
                <div class="form-group">
                <label>Particular:</label>
                <input type="text" name="particular" class="form-control form-control-solid" placeholder="Enter Particular" value="{{$expenses->particular}}"/>
                <span class="form-text text-muted">Please enter your Particular</span>
                </div>
           </div>                   
     <div class="col-md-6">
      <div class="form-group">
      <label>Amount:</label>
      <input type="number" name="amount" class="form-control form-control-solid" placeholder="Enter Amount" value="{{$expenses->amount}}"/>
      <span class="form-text text-muted">Please enter amount </span>
     </div>
   </div><div class="col-md-6">
     <div class="form-group">
                                    <label>Select Mode of CategoryID</label>
                                    <select name="category_id"  class="form-control form-control-solid"  
                                            >
                                        <option  selected disabled="">{{ $expenses->category_id}}</option>
                                        <option value="Kathmandu">Kathamandu</option>
                                        <option value="Pokhara">Pokhara</option>
                                        <option value="Hetauda">Hetauda</option>
                                    </select>
                                     <span class="form-text text-muted">Please select your Mode of CategoryID</span>
                                </div>
                              </div>
<div class="col-md-6">
     <div class="form-group">
      <label>Paid By:</label>
      <input type="text" name="paid_by" class="form-control form-control-solid" placeholder="Enter Paid By" value="{{$expenses->paid_by}}"/>
      <span class="form-text text-muted">Your Paid By</span>
     </div>
</div>
     <div class="col-md-6">
     <div class="form-group">
                                    <label>Select Mode of Payment</label>
                                    <select name="mode_of_payment"  class="form-control form-control-solid"  value=""
                                            >{{$expenses->mode_of_payment}}
                                        <option value="{{ $expenses->mode_of_payment}}" selected hidden>{{ $expenses->mode_of_payment}}</option>
                                        <option value="Kathmandu">Kathamandu</option>
                                        <option value="Pokhara">Pokhara</option>
                                        <option value="Hetauda">Hetauda</option>
                                    </select>
                                     <span class="form-text text-muted">Please select your Mode of Payment</span>
                                </div>
                              </div>
     <div class="col-md-6">
      <div class="form-group">
                                    <label>Select your Expenditure Status</label>
                                    <select name="expenditure"  class="form-control form-control-solid"  value=""
                                            >
                                        <option  value="value={{$expenses->expenditure}}" selected hidden>{{$expenses->expenditure}}</option>
                                        <option value="Kathmandu">Kathamandu</option>
                                        <option value="Bhaktapur">Bhaktapur</option>
                                        <option value="Lalitpur">Laltipur</option>
                                    </select>
                                     <span class="form-text text-muted">Please select your Expenditure Status</span>
                                </div>
                              </div>
     
     <div class="col-md-6">
     <div class="form-group">
      <label>Received By</label>
      <input type="text" name="received_by" class="form-control form-control-solid" placeholder="Enter Received By" value="{{$expenses->received_by}}"/>
      <span class="form-text text-muted">Please enter your Received By</span>
     </div>
     </div>
  </div>
    <div class="card-footer">
          <input type="submit" value="Update" class="btn btn-success">
          <input type="reset" value="reset" class="btn btn-danger">
        </div>
   </form>
</div>
@endsection