@extends('admin.layouts.default')
@section('page_title','Add Expenses')
@section('content')
<style type="text/css">
 p {
    color: red;
  }
</style>
<div class="card-body card">
    <form class="form" method="post" action="{{route('income.update',$income->id)}}" enctype="multipart/form-data">
     @csrf
<div class="row">
          <div class="col-sm-6">
            <div class="form-group">
           <label>Date:</label>
           @error('date')
           <p>The Date is required.</p>
           @enderror
                   <input type="date" name="date" value="{{$income->date}}" class="form-control form-control-solid" placeholder="Enter Date"  />
                 <span class="form-text text-muted">Please enter Date</span>
             </div>
           </div>        
         <div class="col-md-6">
           <div class="form-group">
           <label>Amount:</label>
           @error('amount')
           <p>The Amount is required.</p>
           @enderror
           <input type="number" name="amount" class="form-control form-control-solid" placeholder="     Enter Amount" value="{{$income->amount}}"/>
           <span class="form-text text-muted">Please enter amount </span>
          </div>
          </div><div class="col-md-6">
          <div class="form-group">
                                    <label>Select Mode of CategoryID</label>
                                    @error('category_id')
                                 <p>The Category ID is required.</p>
                                        @enderror
                                    <select name="category_id"  class="form-control form-control-solid"  value=""
                                            >
                                        <option selected disabled="">Select Mode of CategoryID</option>
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
       @error('paid_by')
               <p>The Paid By is required.</p>
                  @enderror
            <input type="text" name="paid_by" class="form-control form-control-solid" placeholder="Enter Paid By" value="{{$income->paid_by}}"/>
            <span class="form-text text-muted">Your Paid By</span>
            </div>
            </div>
            <div class="col-md-6">
           <div class="form-group">
                                    <label>Select Mode of Payment</label>
                                    @error('mode_of_payment')
                             <p>The Mode of Payment is required.</p>
                                          @enderror
                                    <select name="mode_of_payment"  class="form-control form-control-solid"  
                                            >
                                        <option selected disabled="">Select Mode of Payment</option>
                                        <option value="bank" @if($income->mode_of_payment=='bank')selected @endif>bank</option>
                                        <option value="esewa" @if($income->mode_of_payment=='esewa')selected @endif>esewa</option>
                                        <option value="khalti" @if($income->mode_of_payment=='khalti')selected @endif>khalti</option>
                                    </select>
                                     <span class="form-text text-muted">Please select your Mode of Payment</span>
                                </div>
                              </div>
           
                 <div class="col-md-6">
                 <div class="form-group">
                 <label>Received By</label>
      @error('received_by')
                             <p>The Received By is required.</p>
                                          @enderror
      <input type="text" name="received_by" class="form-control form-control-solid" placeholder="Enter Received By" value="{{$income->received_by}}"/>
      <span class="form-text text-muted">Please enter your Received By</span>
     </div>
                </div>
              </div>
               <div class="card-footer">
          <input type="submit" value="submit" class="btn btn-success">
          <input type="reset" value="reset" class="btn btn-danger">
        </div>
  </form>
</div>
@endsection