@extends('admin.layouts.default')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Roles</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                         <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="">Roles</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Roles</li>
                </ol>
            </div>
        </div>
    <div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card card-box">
				<div class="card-head">
					<header>All Roles</header>
                    <!-- <a class="parent-item pull-right btn btn-primary" href="{{ route('roles.create') }}">Add +</a>									 -->
				</div>
				<div class="card-body " id="bar-parent">
    				<table id="exportTable" class="display nowrap" style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Role Name</th>
								<th>Description</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
						</tbody>
						<tfoot>
    						<tr>
                                <th>#</th>
								<th>Role Name</th>
								<th>Description</th>
								<th>Actions</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
@endsection