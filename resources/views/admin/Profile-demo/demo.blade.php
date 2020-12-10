@extends('admin.layouts.default')
@section('page_title','My Profile')
@section('content')
<!--begin::Profile 2-->
								<div class="d-flex flex-row">
									<!--begin::Aside-->
									<div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
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
												<a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Profile Overview</a>
												<a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Personal info</a>
												<a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Account Info</a>
												<a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Change Password</a>
												<a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Email Settings</a>
												<!--end::Nav-->
											</div>
											<!--end::Body-->
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
														<h3 class="card-title font-weight-bolder text-dark">Profile Details</h3>
													</div>
													<!--end::Header-->
													<!--begin::Body-->
                                                    <div class="flex-row-fluid ml-lg-8">
                                                        <!--begin::Card-->
                                                        <div class="card card-custom card-stretch">
                                                            <!--begin::Header-->
                                                            <div class="card-header py-3">
                                                                <div class="card-title align-items-start flex-column">
                                                                    <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
                                                                </div>
                                                            </div>
                                                            <!--end::Header-->
                                                            <!--begin::Form-->
                                                            <div class="card">
                                                                {{-- <div class="card-body padding height-9"> --}}
                                                                    <ul class="list-group list-group-unbordered">
                                                                    	<li class="list-group-item">
                                                                            <b>First Name</b>
                                                                            <div class="profile-desc-item pull-right">{{Auth::user()->name}}</div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Last Name</b>
                                                                            <div class="profile-desc-item pull-right"></div>
                                                                        </li>
                                                                         <li class="list-group-item">
                                                                            <b>Gender </b>
                                                                            <div class="profile-desc-item pull-right">{{Auth::user()->gender}}</div>
                                                                        </li>
                                                                         <li class="list-group-item">
                                                                            <b>Date of Birth </b>
                                                                            <div class="profile-desc-item pull-right">{{Auth::user()->dob}}</div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Current Address</b>
                                                                            <div class="profile-desc-item pull-right"></div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Permanent Address</b>
                                                                            <div class="profile-desc-item pull-right"></div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Position in Company</b>
                                                                            <div class="profile-desc-item pull-right"></div>
                                                                        </li>

                                                                        <li class="list-group-item">
                                                                            <b>Main Department</b>
                                                                            <div class="profile-desc-item pull-right"></div>
                                                                        </li>

                                                                        <li class="list-group-item">
                                                                            <b>Sub-Department</b>
                                                                            <div class="profile-desc-item pull-right"></div>
                                                                        </li>

                                                                        <li class="list-group-item">
                                                                            <b>Phone No.</b>
                                                                            <div class="profile-desc-item pull-right"></div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Mobile No.</b>
                                                                            <div class="profile-desc-item pull-right"></div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Contact No.</b>
                                                                            <div class="profile-desc-item pull-right"></div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Desgination Tittle</b>
                                                                            <div class="profile-desc-item pull-right"></div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Desgination Level</b>
                                                                            <div class="profile-desc-item pull-right"></div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>PAN Number</b>
                                                                            <div class="profile-desc-item pull-right"></div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Joined Date</b>
                                                                            <div class="profile-desc-item pull-right"></div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Email</b>
                                                                            <div class="profile-desc-item pull-right"></div>
                                                                        </li>
                                                                    </ul>
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
										<!--end::Row-->
										<!--begin::Advance Table Widget 5-->

										<!--end::Advance Table Widget 5-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Profile 2-->
@endsection
