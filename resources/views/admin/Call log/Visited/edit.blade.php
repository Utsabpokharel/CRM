@extends('admin.layouts.default')
@section('page_title',' Edit Incoming Call Logs')
@section('content')


<div class="card-body card">
    <form class="form" method="post" action="{{route('visited.update',$visiteds->id)}}" >
     @csrf
      <div class="row">

                                 <div class="col-md-6">
                                <div class="form-group">
                                    <label for="visited_time">Visited Time</label>

                                    <input type="time" class="form-control form-control-solid @error('visited_time') is-invalid @enderror"  name="visited_time" value="{{ $visiteds->visited_time }}"/>

                                     @error('visited_time');
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
                                   </div>
                                  </div>


<div class="col-sm-6">
     <div class="form-group">
      <label for="visited_date">Visited Date</label>

      <input type="date" name="visited_date" class="form-control form-control-solid @error('visited_date') is-invalid @enderror" placeholder="Enter Visited Date" value="{{ $visiteds->visited_date }}"/>
      @error('visited_date')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>

   <div class="col-sm-6">
     <div class="form-group">
      <label for="visitor_name">Visitor Name</label>

      <input type="text" name="visitor_name" class="form-control form-control-solid @error('visitor_name') is-invalid @enderror" placeholder="" value="{{$visiteds->visitor_name}}"/>
      @error('visitor_name')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>
   <div class="col-sm-6">
     <div class="form-group">
      <label for="handled_by">Handled By</label>

      <select name="handled_by" id="handled_by" class="form-control form-control-solid @error('handled_by') is-invalid @enderror" value="{{$visiteds->handled_by}}">
            <option selected disabled value="">Select the person who is handling the call</option>
            @foreach($staffs as $name)
            <option value="{{$name->id}}" class="form-control">{{$name->fname}} {{$name->lname}}</option>
            @endforeach
      </select>
     </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">
      <label for="remarks">Remarks</label>
      <textarea class="form-control form-control-solid" rows="5" name="remarks" placeholder="Remarks" value="{{$visiteds->remarks}}" > </textarea>
     </div>
   </div>
   <div class="col-sm-6">
     <div class="form-group">
      <label for="purpose">Purpose</label>

      <input type="text" name="purpose" class="form-control form-control-solid @error('purpose') is-invalid @enderror" placeholder="Purpose" value="{{$visiteds->purpose}}"/>
      @error('purpose')
          <span class="invalid-feedback" role="alert">{{$message}}</span>
          @enderror
     </div>
   </div>




<div class="col-md-12">

    <div class="card-footer">
          <input type="submit" value="Update" class="btn btn-success">
          <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </div>
   </form>
</div>
@endsection
