@extends('admin.layouts.default')
@section('page_title','My Profile')
@section('content')
<!--begin::Profile 2-->
<div class="d-flex flex-row">
    <!--begin::Aside-->
    <div class="flex-row-auto offcanvas-mobile w-400px w-xl-450px" id="kt_profile_aside">
        <!--begin::Card-->
        <div class="card card-custom">
            <!--begin::Body-->
            <div class="card-body pt-15">
                <!--begin::User-->
                <div class="text-center mb-10">
                    <div class="symbol symbol-60 symbol-circle symbol-xl-90">
                        <div class="symbol-label" style="background-image:url('/metronic/theme/html/demo1/dist/assets/media/users/300_21.jpg')"></div>
                        <i class="symbol-badge symbol-badge-bottom bg-success"></i>
                    </div>
                    <h4 class="font-weight-bold my-2">{{Auth::user()->name}}</h4>
                    <div class="text-muted mb-2">Application Developer</div>
                    <span class="label label-light-warning label-inline font-weight-bold label-lg">Active</span>
                </div>
                <!--end::User-->
                <!--begin::Contact-->
                {{-- <div class="mb-10 text-center">
													<a href="#" class="btn btn-icon btn-circle btn-light-facebook mr-2">
														<i class="socicon-facebook"></i>
													</a>
													<a href="#" class="btn btn-icon btn-circle btn-light-twitter mr-2">
														<i class="socicon-twitter"></i>
													</a>
													<a href="#" class="btn btn-icon btn-circle btn-light-google">
														<i class="socicon-google"></i>
													</a>
												</div> --}}
                <!--end::Contact-->
                <!--begin::Nav-->
                <a href="{{url('admin/profile')}}" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Profile Overview</a>
                <a href="{{route('personal',$user)}}" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Personal info</a>
                <a href="{{route('profile')}}" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Change Password</a>
                <a href="{{route('email')}}" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Email Settings</a>
                <!--end::Nav-->
            </div>
            <!--end::Body-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom card-stretch gutter-b">
                        <div class="card-header border-0">
                            <h6 class="card-title font-weight-bolder text-dark">Bank Account Details</h6>
                        </div>
                        <div class="flex-row-fluid ml-lg-12">
                            <!--begin::Card-->
                            <div class="card card-custom card-stretch">
                                <!--begin::Header-->

                                <!--end::Header-->
                                <!--begin::Form-->
                                <div class="card">
                                    {{-- <div class="card-body padding height-9"> --}}
                                    <div class="form-group row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-12 medium">
                                                    <h6 class="col-xl-12 col-lg-12">
                                                        Bank Name
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <div class="col-md-12 medium">
                                                    <h6 class="col-xl-12 col-lg-12">
                                                    @if($bank !=[])
                                                        {{$bank->bank_name}}
                                                    @else
                                                       Please provide details
                                                    @endif
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-12 medium">
                                                    <h6 class="col-xl-12 col-lg-12">
                                                        Bank Branch
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <div class="col-md-12 medium">
                                                    <h6 class="col-xl-12 col-lg-12">
                                                    @if($bank !=[])
                                                        {{$bank->branch_name}}
                                                    @else
                                                       Please provide details
                                                    @endif
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-12 medium">
                                                    <h6 class="col-xl-12 col-lg-12">
                                                        Account Holder's Name
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <div class="col-md-12 medium">
                                                    <h6 class="col-xl-12 col-lg-12">
                                                    @if($bank !=[])
                                                        {{$bank->accountholder_name}}
                                                    @else
                                                       Please provide details
                                                    @endif
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-12 medium">
                                                    <h6 class="col-xl-12 col-lg-12">
                                                        Account Number
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <div class="col-md-12 medium">
                                                    <h6 class="col-xl-12 col-lg-12">
                                                    @if($bank !=[])
                                                        {{$bank->account_number}}
                                                    @else
                                                       Please provide details
                                                    @endif
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- </div> --}}
                                </div>
                                <!--end::Form-->
                            </div>
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end: Card-->
                    <!--end: List Widget 10-->
                </div>

            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Aside-->
    <!--begin::Content-->
    <div class="flex-row-fluid ml-lg-8">
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-12">
                <!--begin::List Widget 10-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h6 class="card-title font-weight-bolder text-dark">Profile Details</h6>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="flex-row-fluid ml-lg-8">
                        <!--begin::Card-->
                        <div class="card card-custom card-stretch">
                            <!--begin::Header-->
                            <div class="card-header py-3">
                                <div class="card-title align-items-start flex-column">
                                    <h6 class="card-label font-weight-bolder text-dark">Personal Information</h6>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            @if (Auth::user()->email==$staff->email)
                                <div class="card">
                                    {{-- <div class="card-body padding height-9"> --}}
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Name</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->name}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Role</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->role['name']}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Gender</h6> : <h6 class="col-xl-6 col-lg-6"> {{$staff->gender}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Date of Birth</h6> : <h6 class="col-xl-6 col-lg-6"> {{$staff->dob}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Phone Number</h6> : <h6 class="col-xl-6 col-lg-6"> {{$staff->phoneno}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Mobile Number</h6> : <h6 class="col-xl-6 col-lg-6"> {{$staff->mobileno}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Email</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->email}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">PAN Number</h6> : <h6 class="col-xl-6 col-lg-6"> {{$staff->panno}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Permanent Address</h6> : <h6 class="col-xl-6 col-lg-6"> {{$staff->permanent_address}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Temporary Address</h6> : <h6 class="col-xl-6 col-lg-6"> {{$staff->temporary_address}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">District</h6> : <h6 class="col-xl-6 col-lg-6"> {{$staff->district}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">City</h6> : <h6 class="col-xl-6 col-lg-6"> {{$staff->city}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Designation Title</h6> : <h6 class="col-xl-6 col-lg-6"> {{$title->title}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Designation Level</h6> : <h6 class="col-xl-6 col-lg-6"> {{$level->level}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Department</h6> : <h6 class="col-xl-6 col-lg-6"> {{$department->dep_name}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Joined Date</h6> : <h6 class="col-xl-6 col-lg-6"> {{$staff->joined_date}}</h6>
                                    </div>

                                    {{-- </div> --}}
                                </div>

                            @elseif (Auth::user()->email==$customer->email)
                                <div class="card">
                                    {{-- <div class="card-body padding height-9"> --}}
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Name</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->name}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Role</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->role['name']}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Gender</h6> : <h6 class="col-xl-6 col-lg-6"> {{$customer->gender}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Date of Birth</h6> : <h6 class="col-xl-6 col-lg-6"> {{$customer->date_of_birth}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Phone Number</h6> : <h6 class="col-xl-6 col-lg-6"> {{$customer->phone}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Mobile Number</h6> : <h6 class="col-xl-6 col-lg-6"> {{$customer->mobileno}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Email</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->email}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">PAN Number</h6> : <h6 class="col-xl-6 col-lg-6"> {{$customer->panno}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Permanent Address</h6> : <h6 class="col-xl-6 col-lg-6"> {{$customer->permanent_address}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Temporary Address</h6> : <h6 class="col-xl-6 col-lg-6"> {{$customer->temporary_address}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">District</h6> : <h6 class="col-xl-6 col-lg-6"> {{$customer->district}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">City</h6> : <h6 class="col-xl-6 col-lg-6"> {{$customer->city}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Designation Title</h6> : <h6 class="col-xl-6 col-lg-6"> {{$title->title}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Designation Level</h6> : <h6 class="col-xl-6 col-lg-6"> {{$level->level}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Department</h6> : <h6 class="col-xl-6 col-lg-6"> {{$department->dep_name}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Joined Date</h6> : <h6 class="col-xl-6 col-lg-6"> {{$customer->joined_date}}</h6>
                                    </div>

                                    {{-- </div> --}}
                                </div>
                            @elseif (Auth::user()->email==$vendor->email)
                                <div class="card">
                                    {{-- <div class="card-body padding height-9"> --}}
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Name</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->name}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Role</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->role['name']}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Gender</h6> : <h6 class="col-xl-6 col-lg-6"> {{$vendor->gender}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Date of Birth</h6> : <h6 class="col-xl-6 col-lg-6"> {{$vendor->date_of_birth}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Phone Number</h6> : <h6 class="col-xl-6 col-lg-6"> {{$vendor->phone}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Mobile Number</h6> : <h6 class="col-xl-6 col-lg-6"> {{$vendor->mobileno}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Email</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->email}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">PAN Number</h6> : <h6 class="col-xl-6 col-lg-6"> {{$vendor->panno}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Permanent Address</h6> : <h6 class="col-xl-6 col-lg-6"> {{$vendor->permanent_address}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Temporary Address</h6> : <h6 class="col-xl-6 col-lg-6"> {{$vendor->temporary_address}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">District</h6> : <h6 class="col-xl-6 col-lg-6"> {{$vendor->district}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">City</h6> : <h6 class="col-xl-6 col-lg-6"> {{$vendor->city}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Designation Title</h6> : <h6 class="col-xl-6 col-lg-6"> {{$title->title}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Designation Level</h6> : <h6 class="col-xl-6 col-lg-6"> {{$level->level}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Department</h6> : <h6 class="col-xl-6 col-lg-6"> {{$department->dep_name}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Joined Date</h6> : <h6 class="col-xl-6 col-lg-6"> {{$vendor->joined_date}}</h6>
                                    </div>

                                    {{-- </div> --}}
                                </div>
                            @else
                                <div class="card">
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Name</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->name}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Role</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->role['name']}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Gender</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->gender}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Date of Birth</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->date_of_birth}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Phone Number</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->phone}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Mobile Number</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->mobileno}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Email</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->email}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">PAN Number</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->panno}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Permanent Address</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->permanent_address}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Temporary Address</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->temporary_address}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">District</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->district}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">City</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->city}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Designation Title</h6> : <h6 class="col-xl-6 col-lg-6"> {{$title->title}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Designation Level</h6> : <h6 class="col-xl-6 col-lg-6"> {{$level->level}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Department</h6> : <h6 class="col-xl-6 col-lg-6"> {{$department->dep_name}}</h6>
                                    </div>
                                    <div class="form-group row">
                                        <h6 class="col-xl-5 col-lg-5">Joined Date</h6> : <h6 class="col-xl-6 col-lg-6"> {{Auth::user()->joined_date}}</h6>
                                    </div>
                                </div>
                                {{-- <div class="card">Please Provide Details.</div> --}}
                            @endif
                            <!--end::Form-->
                        </div>
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end: Card-->
                <!--end: List Widget 10-->
            </div>

        </div>
        <!--end::Row-->
        <!--begin::Advance Table Widget 5-->

        <!--end::Advance Table Widget 5-->
    </div>
    <!-- Bank Details -->

    <!--end::Content-->
</div>
<!--end::Profile 2-->

<!--begin::Profile 2-->

<!--begin::Aside-->

<!--end::Aside-->
<!--begin::Content-->
<!--begin::Row-->

<!-- Bank Details -->

<!--end::Content-->

<!--end::Profile 2-->
@endsection
