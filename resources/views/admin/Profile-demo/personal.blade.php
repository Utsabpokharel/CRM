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
				<a href="{{route('personal',$user->id)}}" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Personal info</a>
				<a href="{{route('profile')}}" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block">Change Password</a>
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
		<form class="form" method="post" action="{{route('personal_update',$user)}}">
			@csrf
			@method('post')
			<!--begin::Body-->
			<div class="card-body">
				<div class="form-group row">
					<h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
					<div class="col-lg-9 col-xl-6">
						<button type="submit" class="btn btn-success mr-2">Save Changes</button>
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
					<label class="col-xl-3 col-lg-3 col-form-label">Full Name</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="text" value="{{Auth::user()->name}}" />
					</div>
				</div>

				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Gender</label>
					<div class="col-lg-9 col-xl-6">
						<select name="gender" id="gender" class="form-control form-control-solid ">
							<option value="{{Auth::user()->gender}}">{{Auth::user()->gender}}</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Other">Others</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Date of Birth</label>
					<div class="col-lg-9 col-xl-6">
						<input type="date" name="date_of_birth" class="form-control form-control-solid @error('date_of_birth') is-invalid @enderror" value="{{Auth::user()->date_of_birth}}" />
						@error('date_of_birth')
						<span class="invalid-feedback" role="alert">{{$message}}</span>
						@enderror
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Phone Number</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="number" value="{{Auth::user()->phone}}" />
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Mobile Number</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="number" value="{{Auth::user()->mobileno}}" />
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Email</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="text" value="{{Auth::user()->email}}" />
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Pan Number</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="number" value="{{Auth::user()->panno}}" />
					</div>
				</div>

				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Permanent Address</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="text" value="{{Auth::user()->permanent_address}}" />
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Temporary Address</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control form-control-lg form-control-solid" type="text" value="{{Auth::user()->temporary_address}}" />
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">District</label>
					<div class="col-lg-9 col-xl-6">
						<input type="text" name='district' list='districtname' class="form-control form-control-solid @error('disctrict') is-invalid @enderror" placeholder="Please Select..." value="{{Auth::user()->district}}">
						<datalist id='districtname'>
							@foreach($district as $districts)
							<option value="{{$districts->district_name}}"> </option>
							@endforeach
						</datalist>
						@error('district')
						<span class="invalid-feedback" role="alert">{{$message}}</span>
						@enderror
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">City</label>
					<div class="col-lg-9 col-xl-6">
						<input type="text" name='city' list='cityname' class="form-control form-control-solid @error('city') is-invalid @enderror" placeholder="Please Select..." value="{{Auth::user()->city}}">
						<datalist id='cityname'>
							@foreach($city as $cities)
							<option value="{{$cities->city_name}}"> </option>
							@endforeach
						</datalist>
						@error('city')
						<span class="invalid-feedback" role="alert"> {{$message}} </span>
						@enderror
					</div>
				</div>
			</div>
		</form>
		<!--end::Row-->
		<!--begin::Advance Table Widget 5-->

		<!--end::Advance Table Widget 5-->
	</div>
	<!--end::Content-->
</div>
<!--end::Profile 2-->
@endsection
