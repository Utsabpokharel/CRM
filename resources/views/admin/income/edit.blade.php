@extends('admin.layouts.default')
@section('page_title','Edit Income')
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
           <label>Date</label>
           @error('date')
           <p>The Date is required.</p>
           @enderror
                   <input type="date" name="date" value="{{$income->date}}" class="form-control form-control-solid" placeholder="Enter Date"  />

             </div>
           </div>
         <div class="col-md-6">
           <div class="form-group">
           <label>Amount</label>
           @error('amount')
           <p>The Amount is required.</p>
           @enderror
           <input type="number" name="amount" class="form-control form-control-solid" placeholder="     Enter Amount" value="{{$income->amount}}"/>

          </div>
          </div><div class="col-md-6">
          <div class="form-group">
                                    <label>Select Category</label>
                                    @error('category_id')
                                 <p>The Category is required.</p>
                                        @enderror
                                    <select name="category_id"  class="form-control form-control-solid"  value=""
                                            >

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
            <input type="text" name="paid_by" class="form-control form-control-solid"  value="{{$income->paid_by}}"/>

            </div>
            </div>
            <div class="col-md-6">
           <div class="form-group">
                                    <label>Payment Method</label>
                                    @error('mode_of_payment')
                             <p>Payment Method is required.</p>
                                          @enderror
                                    <select name="mode_of_payment"  class="form-control form-control-solid"
                                            >

                                        <option value="bank" @if($income->mode_of_payment=='Bank')selected @endif>Bank</option>
                                        <option value="esewa" @if($income->mode_of_payment=='Esewa')selected @endif>Esewa</option>
                                        <option value="khalti" @if($income->mode_of_payment=='Khalti')selected @endif>Khalti</option>
                                    </select>

                                </div>
                              </div>

                 <div class="col-md-6">
                 <div class="form-group">
                 <label>Received By</label>
      @error('received_by')
                             <p>The Received By is required.</p>
                                          @enderror
      <input type="text" name="received_by" class="form-control form-control-solid" placeholder="Enter Received By" value="{{$income->received_by}}"/>

     </div>
                </div>
              </div>
               <div class="card-footer">
               <button type="submit" class="btn btn-primary mr-2" value="submit">Update</button>
               <button type="reset" class="btn btn-secondary">Cancel</button>
               </div>
  </form>
</div>
@endsection
