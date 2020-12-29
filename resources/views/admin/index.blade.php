@extends('admin.layouts.default')
@section('page_title','Dashboard')
@section('content')
<!--begin::Card-->
  <p> Hello, <a href="{{route('profile.index')}}"><b>{{Auth::user()->name}} </b></a>!!! Welcome To Your Dashboard. </p>
@endsection
