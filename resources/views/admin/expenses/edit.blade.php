@extends('admin.layouts.default')
@section('page_title','Add Customer')
@section('content')
<div class="card-body card">
    <form class="form" method="post" action="{{route('expenses.update',$expenses->id)}}" enctype="multipart/form-data">
     @csrf
<div class="row">
          <div class="col-sm-6">
            <div class="form-group">
           <label>Date</label>
                   <input type="date" name="date" class="form-control form-control-solid" placeholder="Enter Date" value="{{$expenses->date}}"/>
                
             </div>
           </div>
           <div class="col-sm-6">
                <div class="form-group">
                <label>Particular</label>
                <input type="text" name="particular" class="form-control form-control-solid" placeholder="Enter Particular" value="{{$expenses->particular}}"/>

                </div>
           </div>                   
     <div class="col-md-6">
      <div class="form-group">
      <label>Amount</label>
      <input type="number" name="amount" class="form-control form-control-solid" placeholder="Enter Amount" value="{{$expenses->amount}}"/>

     </div>
   </div><div class="col-md-6">
     <div class="form-group">
                                    <label>Category Name</label>
                                    <select name="category_id"  class="form-control form-control-solid"  
                                            >
                                        <option  selected disabled="">{{ $expenses->category_id}}</option>
                                        <option value="Kathmandu">Kathamandu</option>
                                        <option value="Pokhara">Pokhara</option>
                                        <option value="Hetauda">Hetauda</option>
                                    </select>
                                    
                                </div>
                              </div>
<div class="col-md-6">
     <div class="form-group">
      <label>Paid By</label>
      <input type="text" name="paid_by" class="form-control form-control-solid" placeholder="Enter Paid By" value="{{$expenses->paid_by}}"/>
 
     </div>
</div>
     <div class="col-md-6">
     <div class="form-group">
                                    <label>Payment Method</label>
                                    <select name="mode_of_payment"  class="form-control form-control-solid"  value="{{$expenses->mode_of_payment}}">
                                            
                                        <option value="{{ $expenses->mode_of_payment}}" selected hidden>{{ $expenses->mode_of_payment}}</option>
                                        <option value="bank" @if($income->mode_of_payment=='Bank')selected @endif>Bank</option>
                                        <option value="esewa" @if($income->mode_of_payment=='Esewa')selected @endif>Esewa</option>
                                        <option value="khalti" @if($income->mode_of_payment=='Khalti')selected @endif>Khalti</option>
                                    </select>
                                   
                              </div>
     <div class="col-md-6">
      <div class="form-group">
                                    <label>Expenditure Status</label>
                                    <select name="expenditure"  class="form-control form-control-solid"  value="value={{$expenses->expenditure}}"
                                            >
                                      
                                        <option value="paid">Paid</option>
                                        <option value="partiallypaid">Partially Paid</option>
                                        <option value="unpaid">Unpaid</option>>
                                    </select>
                                     
                                </div>
                              </div>
     
     <div class="col-md-6">
     <div class="form-group">
      <label>Received By</label>
      <input type="text" name="received_by" class="form-control form-control-solid" placeholder="Enter Received By" value="{{$expenses->received_by}}"/>
   
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