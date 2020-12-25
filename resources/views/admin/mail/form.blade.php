@extends('admin.layouts.default')
@section('page_title','Send Mail')
@section('content')
<div class="container">
    <form action="{{route('store_mail')}}" method="post">
        @csrf
        <input type="hidden" name="sender" value="{{Auth::user()->id}}">
        <center>
            <h2>Send Email</h2>
        </center>
        <div class="form-group">
            <input type="number" class="form-control col-md-9" name="receiver" placeholder="Email Address" required>
            <!-- that name email is used in MailController ko mail to vanne ma -->
        </div>
        <div class="form-group">
            <label for="exampleformController">Message</label>
            <textarea class="form-control col-md-8" name="message" rows="5"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
@endsection