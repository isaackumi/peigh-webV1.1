
@extends('layouts/contentLayoutMaster')

@section('title', 'Loan Request')

@section('vendor-style')
  <!-- vendor css files -->

  <link rel="stylesheet" href="{{asset('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
<link rel="stylesheet" href="{{asset('vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/katex.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/monokai-sublime.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/quill.snow.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Roboto+Slab&family=Slabo+27px&family=Sofia&family=Ubuntu+Mono&display=swap" rel="stylesheet">
@endsection

@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-quill-editor.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-email.css')) }}">
  <link rel="stylesheet" href="{{asset('css/base/pages/app-invoice-list.css')}}">
@endsection

<!-- Sidebar Area -->
@section('content-sidebar')
{{-- @include('content/apps/email/app-email-sidebar') --}}
@endsection

@section('content')
<section id="basic-buttons">
  <div class="row">
    <div class="col-12">
      <div class="card">
        
        <div class="card-body">
          
          <div class=" col-md d-flex">
            <a class="btn btn-primary" href="/loan-request/new/add"> + Request for Loan</a>
            {{-- <a class="btn btn-info ms-50" href="/payroll/create"> + Create Payroll</a> --}}
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
<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <table class="datatables-basic table">
          <thead>
            <tr>
              
              
              <th>ID</th>
              <th>Reference</th>
              <th>Amount (GH¢)</th>
              <th>Employee Name</th>
              <th>Company</th>
              
              <th>Date Borrowed</th>
              <th>Paid Back</th>
              <th>Due Date</th>
              {{-- <th>Salary status</th> --}}
              {{-- <th>isActive</th> --}}


              <th>Action</th>
            </tr>
          </thead>
          <tbody>
 <tr>
                
                <td>LR00001</td>
                <td>Rent</td>
                <td>4000</td>
                <td>Anim Damoah</td>
                <td>Ecobank</td>
                <td>22-03-2022</td>
                <td>Not Yet </td>
                <td>01-06-2022</td>
                
                <td>
                  <span>
                  
                 {{-- <a class="btn btn-info">More</a> --}}
                 <a href = "#"
                  data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="View"
                class=""><i data-feather='eye'></i></a>
                 </span>
                </td>
                
            </tr>
   
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Modal to add new record -->
  <div class="modal modal-slide-in fade" id="modals-slide-in">
    <div class="modal-dialog sidebar-sm">
      <form class="add-new-record modal-content pt-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
        </div>
        <div class="modal-body flex-grow-1">
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
            <input
              type="text"
              class="form-control dt-full-name"
              id="basic-icon-default-fullname"
              placeholder="John Doe"
              aria-label="John Doe"
            />
          </div>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-post">Post</label>
            <input
              type="text"
              id="basic-icon-default-post"
              class="form-control dt-post"
              placeholder="Web Developer"
              aria-label="Web Developer"
            />
          </div>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-email">Email</label>
            <input
              type="text"
              id="basic-icon-default-email"
              class="form-control dt-email"
              placeholder="john.doe@example.com"
              aria-label="john.doe@example.com"
            />
            <small class="form-text"> You can use letters, numbers & periods </small>
          </div>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-date">Joining Date</label>
            <input
              type="text"
              class="form-control dt-date"
              id="basic-icon-default-date"
              placeholder="MM/DD/YYYY"
              aria-label="MM/DD/YYYY"
            />
          </div>
          <div class="mb-4">
            <label class="form-label" for="basic-icon-default-salary">Salary</label>
            <input
              type="text"
              id="basic-icon-default-salary"
              class="form-control dt-salary"
              placeholder="$12000"
              aria-label="$12000"
            />
          </div>
          <button type="button" class="btn btn-primary data-submit me-1">Submit</button>
          <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection

@section('vendor-script')
<!-- vendor js files -->
  <script src="{{ asset(mix('vendors/js/editors/quill/katex.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/editors/quill/highlight.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/editors/quill/quill.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{asset('vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/responsive.bootstrap5.js')}}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/pages/app-email.js')) }}"></script>
  <script src="{{asset('js/scripts/pages/app-invoice-list.js')}}"></script>
@endsection
