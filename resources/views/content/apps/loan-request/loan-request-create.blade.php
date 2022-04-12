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
          <h4 class="card-title">Loan Request Form </h4>
        </div>

     <form action="loan-request" method="POST">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="credit-card">Reference</label>
              <input
                type="text"
                class="form-control "
                placeholder=""
                id="credit-card"
              />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="phone-number">Amount</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"></span>
                <input
                  type="text"
                  class="form-control phone-number-mask"
                  placeholder=""
                  id="phone-number"
                />
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="date"> Date Borrowed</label>
              <input type="text"  id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD"/>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="time">Due Date</label>
              <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD"/>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="numeral-formatting">Company</label>
              <input type="text" class="form-control numeral-mask" placeholder="" id="" />
            </div>
            {{-- <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="blocks">Total salaries</label>
              <input type="text" class="form-control block-mask" placeholder="" id="blocks" />
            </div> --}}
            {{-- <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="delimiters">Total deductions</label>
              <input type="text" class="form-control delimiter-mask" placeholder="" id="delimiters" />
            </div> --}}
            {{-- <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="custom-delimiters">Total Accessed By employees</label>
              <input
                type="text"
                class="form-control custom-delimiter-mask"
                placeholder=""
                id="custom-delimiters"
              />
            </div> --}}
            {{-- <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="prefix">First Approval</label>
              <input type="text" class="form-control " id="prefix" />
            </div>
          </div> --}}
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
