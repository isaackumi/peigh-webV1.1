
@extends('layouts/contentLayoutMaster')

@section('title', 'Workers')

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
            <a class="btn btn-primary" href="/payslip/new/add"> + Create Payslip</a>
            {{-- <a class="btn btn-info ms-50" href="/payroll/create"> + Create Payroll</a> --}}
            <div class="ms-2">
            
            <select id="month" class="form-select ms-50 text-capitalize">
              <option value=""> Select Month </option>
              <option>January</option>
              <option>Febuary</option>
              <option>March</option>
            
            </select>
            
              
            
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
              <th>Name</th>
              <th>Role</th>
              <th>Gross Salary</th>
              
              <th>Deductions</th>
              <th>EWA</th>
              <th>Net Salary</th>
              <th>Salary status</th>
              {{-- <th>isActive</th> --}}


              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            @forelse($all  as $payslip)
<tr>
                
                <td>PS00{{$payslip->id}}</td>
                <td>{{$payslip->employee_name}}</td>
                <td>{{$payslip->role}}</td>
                <td>{{$payslip->gross_salary}}</td>
                <td>{{$payslip->deductions}}</td>
                <td>{{$payslip->ewa}}</td>
                <td>{{(int)$payslip->gross_salary - (int)$payslip->deductions - (int)$payslip->ewa}}</td>
                <td>Initiated</td>
                <td>
                  <span>
                 <a href = "#"
                    data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Edit"
                  class=""><i data-feather='edit'></i></a> 
                 <a href = "#"
                  data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="Delete"
                 class=""><i data-feather='trash-2'></i></a> 
                 {{-- <a class="btn btn-info">More</a> --}}
                 <a href = "/payslip/{{$payslip->id}}"
                  data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="View"
                class=""><i data-feather='eye'></i></a>
                 </span>
                </td>
                
            </tr>

            @empty
<tr>
                
                <td>PS001</td>
                <td>K. Manu</td>
                <td>Marketing (role)</td>
                <td>$3,000</td>
                <td>$500</td>
                <td>$500 </td>
                <td>$2,000 (Gross - Deductions - EWA)</td>
                <td>paid/pending/Initiated</td>
                <td>
                  <span>
                 <a href = "#"
                    data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Edit"
                  class=""><i data-feather='edit'></i></a> 
                 <a href = "#"
                  data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="Delete"
                 class=""><i data-feather='trash-2'></i></a> 
                 {{-- <a class="btn btn-info">More</a> --}}
                 <a href = "/payslip/1"
                  data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="View"
                class=""><i data-feather='eye'></i></a>
                 </span>
                </td>
                
            </tr>
            @endforelse
 
   
          </tbody>
        </table>
      </div>
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
