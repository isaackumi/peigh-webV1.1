{{-- @extends('layouts/contentLayoutMaster') --}}

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
<section id="basic-buttons">
  
  <div class="row">
    <div class="col-12">
      <h4 class="page-header mb-2">Payroll</h4>
      <div class="card">
        
        <div class="card-body">
          
          <div class=" col-md-12 d-flex">
            {{-- <a class="btn btn-primary" href="/payslip/new/add"> + Create Payslip</a> --}}
            {{-- <a class="btn btn-info ms-50" href="/payroll/create"> + Generate Payroll</a> --}}

           <div class="col-xl-4 col-md-6 col-sm-12 ">
              <label class="form-label" for="date"> From Date</label>
              <input type="text"  id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD"/>
            </div>
            <div class="col-xl-4 col-md-6 mb-2 ms-2">
              <label class="form-label" for="time">To Date</label>
              <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD"/>
            </div>


            <div class=" col-md-6 col-sm-12 mb-2 ms-2">
              <label class="form-label" for="credit-card">Payroll Name</label>
              <input
                type="text"
                class="form-control credit-card-mask"
                placeholder=""
                id="credit-card"
              />
            </div>
            {{-- <h4>Payroll</h4> --}}
            <div class="ms-2">
            
            {{-- <select id="month" class="form-select ms-50 text-capitalize">
              <option value=""> Select Month </option>
              <option>January</option>
              <option>Febuary</option>
              <option>March</option>
            
            </select> --}}
            
              
            
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Input Mask start -->
<section id="input-mask-wrapper">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Create Payroll</h4>
        </div>

     <form action="/employee/create" method="POST">
        @csrf
        <div class="card-body">
          <div class="row">
            
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="phone-number">Total Gross Salary</label>
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
            {{-- <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="date"> From Date</label>
              <input type="text"  id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD"/>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="time">To Date</label>
              <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD"/>
            </div> --}}
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="numeral-formatting">Total PAYE</label>
              <input type="text" class="form-control numeral-mask" placeholder="" id="" />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="blocks">Total SSNIT</label>
              <input type="text" class="form-control block-mask" placeholder="" id="blocks" />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="delimiters">Total EWA</label>
              <input type="text" class="form-control delimiter-mask" placeholder="" id="delimiters" />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="custom-delimiters">Total Net Salary</label>
              <input
                type="text"
                class="form-control custom-delimiter-mask"
                placeholder=""
                id="custom-delimiters"
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
