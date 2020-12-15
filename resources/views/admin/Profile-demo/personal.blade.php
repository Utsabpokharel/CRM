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
				<a href="{{url('admin/profile')}}" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block ">Profile Overview</a>
				<a href="{{route('personal')}}" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Personal info</a>
				<a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Change Password</a>
				<a href="{{route('email')}}" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Email Settings</a>
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
		<form class="form">
			<!--begin::Body-->
			<div class="card-body">
				<div class="form-group row">
					<h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
					<div class="col-lg-9 col-xl-6">
						<button type="reset" class="btn btn-success mr-2">Save Changes</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
				<!-- <div class="form-group row">
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
				</div> -->
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Bank Name</label>
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
					<label class="col-xl-3 col-lg-3 col-form-label">Gender</label>
					<div class="col-lg-9 col-xl-6">
						<select name="gender" id="gender" class="form-control form-control-solid ">
							<option value="">Select a Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Other">Others</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Date of Birth</label>
					<div class="col-lg-9 col-xl-6">
						<input type="date" class="form-control form-control-solid @error('joined_date') is-invalid @enderror" name="joined_date" placeholder="Enter Joined Date" />
					</div>
				</div>

				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Current Address</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="text" value="" />
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Permanent Address</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="text" value="" />
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Position in Company</label>
					<div class="col-lg-9 col-xl-6">
						<select name="position" id="position" class="form-control form-control-solid ">
							<option value="">Select a Position</option>
							<option value="Male">Front End Designer</option>
							<option value="Female">Back End Designer</option>
							<option value="Other">SEO</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Department</label>
					<div class="col-lg-9 col-xl-6">
						<select name="department" id="department" class="form-control form-control-solid ">
							<option value="">Select a Department</option>
							<option value="Department One">Department Two</option>
							<option value="Department Two">Department Two</option>
							<option value="Department Three">Department Three</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Mobile Number</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="number" value="" />
					</div>
				</div>

				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Phone Number</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="number" value="" />
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Pan Number</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="number" value="" />
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Joined Date</label>
					<div class="col-lg-9 col-xl-6">
						<input type="date" class="form-control form-control-solid @error('joined_date') is-invalid @enderror" name="joined_date" placeholder="Enter Joined Date" />
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Email</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="text" value="" />
					</div>
				</div>

			</div>
			<!--end::Body-->
		</form>
		<!--end::Row-->
		<!--begin::Advance Table Widget 5-->

		<!--end::Advance Table Widget 5-->
	</div>
	<!--end::Content-->
</div>
<!--end::Profile 2-->
@endsection