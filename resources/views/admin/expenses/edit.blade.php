@extends('admin.layouts.default')
@section('page_title','Edit Expense')
@section('content')
<div class="card-body card">
    <form class="form" method="post" action="{{route('expenses.update',$expenses->id)}}" enctype="multipart/form-data">
     @csrf





                                        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
           <label>Date</label>
           @error('date')
           <p>The Date is required.</p>
           @enderror
                   <input type="date" name="date" class="form-control form-control-solid" value="{{$expenses->date}}"/>

             </div>
           </div>
           <div class="col-sm-6">
                <div class="form-group">
                <label>Particular</label>
                @error('particular')
           <p>The Particular is required.</p>
           @enderror
                <input type="text" name="particular" class="form-control form-control-solid" value="{{$expenses->particular}}"/>

                </div>
           </div>
         <div class="col-md-6">
           <div class="form-group">
           <label>Amount</label>
           @error('amount')
           <p>The Amount is required.</p>
           @enderror
           <input type="number" name="amount" class="form-control form-control-solid" value="{{$expenses->amount}}"/>

          </div>
          </div><div class="col-md-6">
          <div class="form-group">
                                    <label>Category Name</label>
                                    @error('category_id')
                                 <p>The Category is required.</p>
                                        @enderror
                                    <select name="category_id"  class="form-control form-control-solid"  value=""
                                            >

                                         @foreach($expensescategories as $expensess)
                                <option value="{{$expensess->id}}">{{$expensess->name}}</option>
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
                  <select name="paid_by" class="form-control form-control-solid" value="{{$expenses->paid_by}}"
                                            >

                                         @foreach($staffs as $staff)
                                <option value="{{$staff->id}}" class="form-control">{{$staff->fname}} {{$staff->lname}}</option>
                                        @endforeach
                                    </select>

            </div>
            </div>
            <div class="col-md-6">
           <div class="form-group">
                                    <label>Payment Method</label>
                                    @error('mode_of_payment')
                             <p>The Mode of Payment is required.</p>
                                          @enderror
                                    <select name="mode_of_payment"  class="form-control form-control-solid"  value=""
                                            >
                                            <option value="bank" @if($expenses->mode_of_payment=='Bank')selected @endif>Bank</option>
                                        <option value="esewa" @if($expenses->mode_of_payment=='Esewa')selected @endif>Esewa</option>
                                        <option value="khalti" @if($expenses->mode_of_payment=='Khalti')selected @endif>Khalti</option>
                                    </select>

                                </div>
                              </div>
            <div class="col-md-6">
             <div class="form-group">
                                    <label>Expenditure Status</label>
                                    @error('expenditure')
                             <p>The Expenditure Status is required.</p>
                                          @enderror
                                    <select name="expenditure"  class="form-control form-control-solid"  value=""
                                            >

                                        <option value="paid">Paid</option>
                                        <option value="partiallypaid">Partially Paid</option>
                                        <option value="unpaid">Unpaid</option>
                                    </select>

                                </div>
                              </div>

                 <div class="col-md-6">
                 <div class="form-group">
                 <label>Received By</label>
      @error('received_by')
                             <p>The Received By is required.</p>
                                          @enderror
      <input type="text" name="received_by" class="form-control form-control-solid"  value="{{$expenses->received_by}}"/>

     </div>
                </div>
              </div>
    <div class="card-footer">
          <input type="submit" value="Update" class="btn btn-success">
          <input type="reset" value="Reset" class="btn btn-danger">
        </div>
   </form>
</div>
@endsection
