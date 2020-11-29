@extends('admin.layouts.default')
@section('page_title','Email Setting')
@section('content')
<div class="row">
	<div class="col-lg-8 col-md-8">
		<div class="card card-custom gutter-b example example-compact">
			<div class="card-header">
				<h3 class="card-title">Email Setting</h3>
				<div class="card-toolbar">
					<div class="example-tools justify-content-center">

					</div>
				</div>
			</div>
			<form action="" method="post">
				<div class="card-body">
					<div class="form-group">
							<label>Mail Driver</label>
							<select class="form-control form-control-solid" name="maildriver">
								<option value="">Please Select One...</option>
								<option value="mail">mail</option>
								<option value="smtp">smtp</option>
							</select>
					</div>
					<div class="form-group">
							<label>Mail Host</label>
							<input type="text" name="mailhost" class="form-control form-control-solid" placeholder="Enter Mail Host">
					</div>
					<div class="form-group">
							<label>Mail Port</label>
							<input type="text" name="mailport" class="form-control form-control-solid" placeholder="Enter Mail Port">
					</div>
					<div class="form-group">
							<label>Mail Username</label>
							<input type="text" name="mailusername" class="form-control form-control-solid" placeholder="Enter Mail Username">
					</div>
					<div class="form-group">
							<label>Mail Password</label>
							<input type="text" name="mailpassword" class="form-control form-control-solid" placeholder="Enter Mail Password">
					</div>
					<div class="form-group">
							<label>Mail Encryption</label>
							<select class="form-control form-control-solid" name="mailencryption">
								<option value="">Please Select One...</option>
								<option value="tls">tls</option>
								<option value="ssl">ssl</option>
							</select>
					</div>
				</div>
				<div class="card-footer">
					<button type="reset" class="btn btn-primary mr-2">Submit</button>
					<button type="reset" class="btn btn-secondary">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
	@endsection