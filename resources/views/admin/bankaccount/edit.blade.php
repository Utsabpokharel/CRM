@extends('admin.layouts.default')
@section('page_title','Add Bank Account')
@section('content')


<div class="card-body card">
    <form class="form" method="post" action="{{route('bank.update',$bank->id)}}" >
     @csrf
     @method('put')
      <div class="row">
<div class="col-md-6"><div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_id">Select User Name</label>
                                    
                                    <select name="user_id"  class="form-control form-control-solid @error('user_id') is-invalid @enderror" value="{{$bank->user_id}}"
                                            >
                                        <option selected disabled="">Select  User Name</option>
                                        @foreach($users as $user)
                                        {
                                          <option value="{{$user->id}}" class="form-control">{{$user->name}}
                                          </option>
                                        @endforeach
                                        }

                                        
                                    </select>
                                     @error('user_id')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
                                   </div>
                                  </div>



<div class="col-sm-6">
     <div class="form-group">
      <label>Account Holder Name:</label>
      
      <input type="text" name="accountholder_name" class="form-control form-control-solid @error('accountholder_name') is-invalid @enderror" placeholder="Enter Account Holder Name" value="{{$bank->accountholder_name}}"/>
      @error('accountholder_name')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>
 

    

      
                                 
                            
     <div class="col-md-6">
      <div class="form-group">
      <label>Bank Name:</label>
      <input type="text" name="bank_name" class="form-control form-control-solid @error('bank_name') is-invalid @enderror" placeholder="Enter Bank Name" value="{{$bank->bank_name}}"/>
      
      @error('dob')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>
<div class="col-md-6">
     <div class="form-group">
      <label>Branch Name:</label>
      
      <input type="text" name="branch_name" class="form-control form-control-solid @error('branch_name') is-invalid @enderror" placeholder="Enter Branch Name" value="{{$bank->branch_name}}"/>
      @error('branch_name')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
</div>

<div class="col-md-6">
     <div class="form-group">
      <label>Account Number:</label>
      
      <input type="text" name="account_number" class="form-control form-control-solid @error('account_number') is-invalid @enderror" placeholder="Enter your Account Number" value="{{$bank->account_number}}"/>
      @error('account_number')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
</div>

<div class="col-md-12">

    <div class="card-footer">
          <input type="submit" value="update" class="btn btn-success">
          <input type="reset" value="reset" class="btn btn-danger">
        </div>
    </div>
   </form>
</div>
@endsection
