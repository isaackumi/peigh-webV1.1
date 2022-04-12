@extends('layouts/contentLayoutMaster')

{{-- @section('title', 'Create Employee') --}}
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
@endsection
@section('content')
<!-- Input Mask start -->
<section id="input-mask-wrapper">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Create Company</h4>
        </div>

     <form action="/company" method="POST">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="credit-card">Company Name</label>
              <input
                type="text"
                class="form-control"
                placeholder="peigh"
                id="credit-card"
                name="name"
              />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="phone-number">Owner</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"></span>
                <input
                  type="text"
                  class="form-control "
                  placeholder="Nana Kwasi"
                  id="phone-number"
                  name="owner"
                />
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="date"> Location</label>
              <input type="text" class="form-control" placeholder="Vilagio" name="location"/>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="time">City</label>
              <input type="text" class="form-control" placeholder="Accra" name="city"/>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="numeral-formatting">Country</label>
              <input type="text" class="form-control " placeholder="Ghana" id="" name="country" />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="blocks">Company Email</label>
              <input type="text" class="form-control " placeholder="info@peigh.com" id="blocks"  name="email"/>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="delimiters">Phone number</label>
              <input type="text" class="form-control" placeholder="+233548769251" id="delimiters" name="phone_number" />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="custom-delimiters">Company ID</label>
              <input
                type="text"
                class="form-control custom-delimiter-mask"
                placeholder="PR-347"
                id="custom-delimiters"
                
                name="company_id"
              />
            </div>
            {{-- <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="prefix">First Approval</label>
              <input type="text" class="form-control " id="prefix" />
            </div> --}}
          </div>
          <div class="">
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
           </div>
        </div>

    </form>
      </div>
    </div>
  </div>

</section>
<!-- Input Mask End -->
@endsection

@section('vendor-script')
  <script src="{{ asset(mix('vendors/js/forms/cleave/cleave.min.js'))}}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/addons/cleave-phone.us.js'))}}"></script>

    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection

@section('page-script')
  <script src="{{ asset(mix('js/scripts/forms/form-input-mask.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
@endsection
