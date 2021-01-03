@extends('admin.layouts.default')
@section('page_title','Add Incoming Call Logs')
@section('content')


<div class="card-body card">
    <form class="form" method="post" action="{{route('incoming.store')}}" >
     @csrf
      <div class="row">

         <div class="col-md-6">
         <div class="form-group">
        <label for="incoming_time">Incoming Time</label>

        <input type="time" class="form-control form-control-solid @error('incoming_time') is-invalid @enderror"  name="incoming_time"/>

         @error('incoming_time');
          <span class="invalid-feedback" role="alert">{{$message}}</span>
        @enderror
            </div>
             </div>


<div class="col-sm-6">
     <div class="form-group">
      <label for="incoming_date">Incoming Date</label>

      <input type="date" name="incoming_date" class="form-control form-control-solid @error('incoming_date') is-invalid @enderror" placeholder="Enter Incoming Date"/>
      @error('incoming_date')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>

   <div class="col-sm-6">
     <div class="form-group">
      <label for="called_by">Called By</label>

      <input type="text" name="called_by" class="form-control form-control-solid @error('called_by') is-invalid @enderror" placeholder="Called by"/>
      @error('called_by')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>

   <div class="col-sm-6">
     <div class="form-group">
      <label for="received_by">Received By</label>

      <select name="received_by" id="received_by" class="form-control form-control-solid @error('received_by') is-invalid @enderror">
            <option selected disabled value="">Select the person who receive the call</option>
            @foreach($staffs as $name)
            <option value="{{$name->id}}" class="form-control">{{$name->fname}} {{$name->lname}}</option>
            @endforeach
      </select>
     </div>
   </div>

   <div class="col-sm-6">
      <div class="form-group">
      <label for="remarks">Remarks</label>
      <textarea class="form-control form-control-solid" rows="5" name="remarks" placeholder="Remarks"> </textarea>
     </div>
   </div>

   <div class="col-sm-6">
     <div class="form-group">
      <label for="purpose">Purpose</label>

      <input type="text" name="purpose" class="form-control form-control-solid @error('purpose') is-invalid @enderror" placeholder="Purpose" />
      @error('purpose')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>






<div class="col-md-12">

    <div class="card-footer">
          <input type="submit" value="Submit" class="btn btn-success">
          <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </div>
 </div>
   </form>
</div>
@endsection
