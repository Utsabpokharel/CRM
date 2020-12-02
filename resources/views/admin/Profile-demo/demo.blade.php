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
													<h4 class="font-weight-bold my-2">James Jones</h4>
													<div class="text-muted mb-2">Application Developer</div>
													<span class="label label-light-warning label-inline font-weight-bold label-lg">Active</span>
												</div>
												<!--end::User-->
												<!--begin::Contact-->
												<div class="mb-10 text-center">
													<a href="#" class="btn btn-icon btn-circle btn-light-facebook mr-2">
														<i class="socicon-facebook"></i>
													</a>
													<a href="#" class="btn btn-icon btn-circle btn-light-twitter mr-2">
														<i class="socicon-twitter"></i>
													</a>
													<a href="#" class="btn btn-icon btn-circle btn-light-google">
														<i class="socicon-google"></i>
													</a>
												</div>
												<!--end::Contact-->
												<!--begin::Nav-->
												<a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Profile Overview</a>
												<a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Personal info</a>
												<a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Account Info</a>
												<a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Change Passwort</a>
												<a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Email Settings</a>
												<a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Saved Credit Cards</a>
												<a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Tax information</a>
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
														{{-- <div class="card-toolbar">
															<div class="dropdown dropdown-inline">
																<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="ki ki-bold-more-ver"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
																	<!--begin::Naviigation-->
																	<ul class="navi">
																		<li class="navi-header font-weight-bold py-5">
																			<span class="font-size-lg">Add New:</span>
																			<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																		</li>
																		<li class="navi-separator mb-3 opacity-70"></li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-icon">
																					<i class="flaticon2-shopping-cart-1"></i>
																				</span>
																				<span class="navi-text">Order</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-icon">
																					<i class="navi-icon flaticon2-calendar-8"></i>
																				</span>
																				<span class="navi-text">Members</span>
																				<span class="navi-label">
																					<span class="label label-light-danger label-rounded font-weight-bold">3</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-icon">
																					<i class="navi-icon flaticon2-telegram-logo"></i>
																				</span>
																				<span class="navi-text">Project</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-icon">
																					<i class="navi-icon flaticon2-new-email"></i>
																				</span>
																				<span class="navi-text">Record</span>
																				<span class="navi-label">
																					<span class="label label-light-success label-rounded font-weight-bold">5</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-separator mt-3 opacity-70"></li>
																		<li class="navi-footer pt-5 pb-4">
																			<a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
																			<a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
																		</li>
																	</ul>
																	<!--end::Naviigation-->
																</div>
															</div>
														</div> --}}
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
                                                                    <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
                                                                </div>
                                                                <div class="card-toolbar">
                                                                    <button type="reset" class="btn btn-success mr-2">Save Changes</button>
                                                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                                                </div>
                                                            </div>
                                                            <!--end::Header-->
                                                            <!--begin::Form-->
                                                            <form class="form">
                                                                <!--begin::Body-->
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <label class="col-xl-3"></label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <h5 class="font-weight-bold mb-6">Customer Info</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(/metronic/theme/html/demo1/dist/assets/media/users/blank.png)">
                                                                                <div class="image-input-wrapper" style="background-image: url(/metronic/theme/html/demo1/dist/assets/media/users/300_21.jpg)"></div>
                                                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                                                                    <input type="hidden" name="profile_avatar_remove" />
                                                                                </label>
                                                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                                </span>
                                                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                                </span>
                                                                            </div>
                                                                            <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <input class="form-control form-control-lg form-control-solid" type="text" value="Nick" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <input class="form-control form-control-lg form-control-solid" type="text" value="Bold" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Company Name</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <input class="form-control form-control-lg form-control-solid" type="text" value="Loop Inc." />
                                                                            <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label class="col-xl-3"></label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <div class="input-group input-group-lg input-group-solid">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">
                                                                                        <i class="la la-phone"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" class="form-control form-control-lg form-control-solid" value="+35278953712" placeholder="Phone" />
                                                                            </div>
                                                                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <div class="input-group input-group-lg input-group-solid">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">
                                                                                        <i class="la la-at"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" class="form-control form-control-lg form-control-solid" value="nick.bold@loop.com" placeholder="Email" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Company Site</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <div class="input-group input-group-lg input-group-solid">
                                                                                <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Username" value="loop" />
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text">.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Body-->
                                                            </form>
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
