@extends('admin.layouts.default')
@section('page_title','Profile Setting')
@section('content')
<div class="page-bar">
		<div class="page-title-breadcrumb">
			<ol class="breadcrumb page-breadcrumb">
				<li class="flex"></li>
				<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
					<i class="fa fa-angle-right"></i>
				</li>
				<li><a class="parent-item" href="">Setting</a>&nbsp;
					<i class="fa fa-angle-right"></i>
				</li>
				<li class="active">Profile Setting</li>
			</ol>
		</div>
	</div>
<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card card-custom gutter-b example example-compact">
			<div class="card-header">
				<h3 class="card-title">Profile Setting</h3>
				<div class="card-toolbar">
					<div class="example-tools justify-content-center">

					</div>
				</div>
			</div>

			<div class="card-body">
				<form action="" method="post">
					<div class="row">
						<div class="col-lg-12 setting-heading">
							<h2>Personal Details Setting</h2>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="avatar-upload">
								<div class="avatar-edit">
									<input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
									<label for="imageUpload"><i class="fas fa-pencil-alt" style="margin-top:6px;margin-left:8px"></i></label>
								</div>
								<div class="avatar-preview">
									<div id="imagePreview" style="background-image: url({{asset('images/profile.png')}});">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12">

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="form-group">
										<label>Name</label>
										<input type="text" name="name" class="form-control form-control-solid" value="{{Auth::user()->name}}">
									</div>
									<div class="form-group">
										<label>Login Email Address</label>
										<input type="email" name="email" class="form-control form-control-solid" value="{{Auth::user()->email}}">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="form-group">
										<label>Mobile Number</label>
										<input type="text" name="mobileno" class="form-control form-control-solid" value="{{Auth::user()->mobileno}}">
									</div>
									<div class="form-group">
										<label>Temporary Address</label>
										<input type="text" name="address" class="form-control form-control-solid" value="{{Auth::user()->temporary_address}}">
									</div>
								</div>

							</div>
						</div>
						<div class="col-lg-12">
							<button class="btn btn-primary">Update</button>
						</div>
					</div>

				</form>
                <form method="post" action="{{route('changePassword',Auth::user()->id)}}" style="margin-top:30px">
                    @csrf
                    @method('post')
					<div class="row">
						<div class="col-lg-12 setting-heading">
							<h2>Change Password</h2>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">

							<div class="form-group">
								<label>New Password</label>
								<input type="password" name="password" class="form-control form-control-solid" placeholder="Enter New Password">
							</div>

						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" name="confirmpassword" class="form-control form-control-solid" placeholder="Enter Confirm Password">
							</div>
						</div>
						<div class="col-lg-12">
							<button class="btn btn-primary">Update</button>
						</div>
					</div>

				</form>
			</div>

		</div>
	</div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>
@endpush
