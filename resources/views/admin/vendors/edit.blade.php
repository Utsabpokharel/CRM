@extends('admin.layouts.default')
@section('page_title','Edit Vendor')
@section('content')
<div class="card-body card">
    <form class="form">
<form method="post" action="{{ route('vendor.edit',$vendor->id) }}" enctype="multipart/form-data">
                        @csrf

     <div class="form-group">
      <label for='fname'>Firstname</label>
      <input type="name" id="fname" name="fname" value="{{$vendor->fname  }}"class="form-control form-control-solid" placeholder="Edit first name"/>
      <span class="form-text text-muted">Please edit your first name</span>
     </div>
     <div class="form-group">
      <label for='lname'>Lastname</label>
      <input type="name" id="lname" name="lname" value="{{$vendor->lname  }}"class="form-control form-control-solid" placeholder="Edit last name"/>
      <span class="form-text text-muted">Please edit your last name</span>
     </div>
     <div class="form-group">
      <label for="gender">Gender</label>
      <div class="checkbox-list">
       <label class="checkbox">
        <input type="checkbox" id="gender" name="gender" value="{{@if($data->gender=="Male")selected @endif  }}"/>
        <span></span>
        Male
       </label>
       <label class="checkbox">
        <input type="checkbox" id="gender" name="gender" value="{{@if($data->gender=="Female")selected @endif  }}"/>
        <span></span>
        Female
       </label>
       <label class="checkbox">
        <input type="checkbox" id="gender" name="gender" value="{{@if($data->gender=="Other")selected @endif  }}"/>
        <span></span>
        Other
       </label>
      </div>
     </div>
     <div class="form-group">
      <label>Date of Birth</label>
      <input type="date" id="dateofbirth" name="dateofbirth"value="{{$vendor->dateofbirth  }}" class="form-control form-control-solid" placeholder="Edit your birth date"/>
      <span class="form-text text-muted">Birth Date is required</span>
     </div>
     <div class="form-group">
      <label>Registration Number</label>
      <input type="text" id="registrationumber" name="registrationnumber" value="{{$vendor->registrationnumber  }}" class="form-control form-control-solid" placeholder="Edit your registration number"/>
      <span class="form-text text-muted">Registration Number is required</span>
     </div>
     <div class="form-group">
      <label>PAN/VAT Number</label>
      <input type="text" id="panvatnumber" name="panvatnumber" value="{{$vendor->panvatnumber  }}" class="form-control form-control-solid" placeholder="Edit your pan/vat number"/>
      <span class="form-text text-muted">PAN/VAT is required</span>
     </div>
     <div class="form-group">
      <label>Email</label>
      <input type="email" id="email" name="email" value="{{$vendor->email  }}" class="form-control form-control-solid" placeholder="Edit your email"/>
      <span class="form-text text-muted">Email is required</span>
     </div>

     <div class="form-group">
      <label>Image</label>
      <input type="file" id="image" name="image" value="{{$vendor->image  }}" class="form-control form-control-solid" placeholder="Change your image"/>
      <span class="form-text text-muted">Image is required</span>
     </div>

     <div class="form-group">
      <label>Mobile Number</label>
      <input type="text" id="mobile" name="mobile" value="{{$vendor->mobile  }}"class="form-control form-control-solid" placeholder="Edit your mobile number"/>
      <span class="form-text text-muted">Mobile Number is required</span>
     </div>

     <div class="form-group">
      <label>Address</label>
      <input type="text" id="address1" name="address1" value={{ $vendor->address1 }} class="form-control form-control-solid" placeholder="Edit your address"/>
      <span class="form-text text-muted">Address is required</span>
     </div>

     <div class="form-group">
      <label for="vendor_type">Vendor Type</label>
      <div class="checkbox-list">
       <label class="checkbox">
        <input type="checkbox" id="vendor_type" name="vendor_type"/>
        <span></span>
        Organization
       </label>
       <label class="checkbox">
        <input type="checkbox" id="vendor_type" name="vendor_type"/>
        <span></span>
        Individual
       </label>
      </div>
     </div>

    <div class="card-footer">
     <button type="reset" class="btn btn-primary mr-2">Update</button>
     <a href="{{ route('vendor.index') }}" class="btn btn-info">View All</a>
     <button type="reset" class="btn btn-secondary">Cancel</button>

   </form>
</div>
@endsection
