@extends('admin.layouts.default')
@section('page_title','Add Incomes')
@section('content')
<style type="text/css">
 p {
    color: red;
  }
</style>
<div class="card-body card">
    <form class="form" method="post" action="{{route('income.store')}}" enctype="multipart/form-data">
     @csrf
<div class="row">
          <div class="col-sm-6">
            <div class="form-group">
           <label>Date</label>
           @error('date')
           <p>The Date is required.</p>
           @enderror
                   <input type="date" name="date" class="form-control form-control-solid" placeholder="Enter Date" />
             </div>
           </div>        
         <div class="col-md-6">
           <div class="form-group">
           <label>Amount</label>
           @error('amount')
           <p>The Amount is required.</p>
           @enderror
           <input type="number" name="amount" class="form-control form-control-solid" placeholder="Enter Amount"/>
          </div>
          </div><div class="col-md-6">
          <div class="form-group">
                                    <label>Select Category</label>
                                    @error('category_id')
                                 <p>The Category is required.</p>
                                        @enderror
                                    <select name="category_id"  class="form-control form-control-solid"  value="">
                                        <option selected disabled="">Select Category</option>
                                        @foreach($categories as $category)
                                <option value="{{$category->id}}" class="form-control">{{$category->name}}</option>
                            @endforeach
                                    </select>
                                </div>
                              </div>
            <div class="col-md-6">
            <div class="form-group">
            <label>Paid By</label>
       @error('paid_by')
               <p>The Paid By is required.</p>
                  @enderror
            <input type="text" name="paid_by" class="form-control form-control-solid" placeholder="Enter Paid By"/>
            </div>
            </div>
            <div class="col-md-6">
           <div class="form-group">
                                    <label>Payment Method</label>
                                    @error('mode_of_payment')
                             <p>Payment Method is required.</p>
                                          @enderror
                                    <select name="mode_of_payment"  class="form-control form-control-solid"  value=""
                                            >
                                        <option selected disabled="">Select Payment Method</option>
                                        <option value="bank">Bank</option>
                                        <option value="esewa">Esewa</option>
                                        <option value="khalti">Khalti</option>
                                    </select>
                                </div>
                              </div>
           
                 <div class="col-md-6">
                 <div class="form-group">
                 <label>Received By</label>
      @error('received_by')
                             <p>The Received By is required.</p>
                                          @enderror
      <input type="text" name="received_by" class="form-control form-control-solid" placeholder="Enter Received By"/>
     </div>
                </div>
              </div>
               <div class="card-footer">
          <button type="submit" value="submit" class="btn btn-primary mr-2">Add</button> 
          <button type="reset" class="btn btn-secondary mr-2" value="reset">Reset</button>
          <a href="{{route('income.view')}}" class="btn btn-danger">Cancel</a>
        </div>
  </form>
</div>
@endsection