@extends('admin.layouts.default')
@section('page_title','Response enquiry')
@section('content')
    <div class="card-body card">
        <form action="{{route('EnquiryResponse.store')}}" class="form" method="post">
            @csrf
            <div class="form-group">
                <input type="hidden" name="enquiry_by" value="{{$enquiry}}"/>
                <br>
                <input type="hidden" name="responded_by" value="{{Auth::user()->id}}"
                />
            </div>
            <div class="form-group">
                <label>Responded Through:</label>
                <select name="responded_through" id="" class="form-control form-control-solid" required>
                    <option selected disabled>--Select any one--</option>
                    <option @if(old('responded_through')=='Facebook') selected @endif value="Facebook">Facebook</option>
                    <option @if(old('responded_through')=='Instagram') selected @endif value="Instagram">Instagram</option>
                    <option @if(old('responded_through')=='Linkdin') selected @endif value="Linkdin">Linkdin</option>
                </select>
                @error('responded_through')
                <div class="text-danger">The responded through field is required</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Message:</label>
                <textarea class="form-control form-control-solid" name="message" cols="30"
                          rows="10">{{old('message')}}</textarea>
                @error('message')
                <div class="text-danger">The message field is required</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Remarks:</label>
                <textarea class="form-control form-control-solid" name="remarks" cols="30"
                          rows="10">{{old('remarks')}}</textarea>
                @error('remarks')
                <div class="text-danger">The remarks field is required</div>
                @enderror
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
@endsection
