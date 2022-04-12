
@extends('layouts/contentLayoutMaster')

{{-- @section('title', 'Company') --}}

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
<section id="dashboard-ecommerce">
<div class="row match-height">
    <!-- Medal Card -->
    <div class="col-xl-4 col-md-6 col-12">
      <div class="card card-congratulation-medal">
        <div class="card-body">
          <h5 class=""> {{$company->name}}</h5>
          {{-- <p class="card-text font-small-3">You have won gold medal</p> --}}
          <h3 class="mb-75 mt-2 pt-50">
            <a href="#"></a>
          </h3>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createEmployeeForm">Create New Employee</button>
          {{-- <img src="{{asset('images /illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" /> --}}
        </div>
      </div>
    </div>
    <!--/ Medal Card -->

    <!-- Statistics Card -->
    <div class="col-xl-8 col-md-6 col-12">
      <div class="card card-statistics">
        <div class="card-header">
          <h4 class="card-title">SUMMARY</h4>
          <div class="d-flex align-items-center">
            {{-- <p class="card-text font-small-2 me-25 mb-0"><span>Joined:</span> {{$company->created_at->diffForHumans() ?? " "}}</p> --}}
          </div>
        </div>
        <div class="card-body statistics-body">
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-primary me-2">
                  <div class="avatar-content">
                    <i data-feather="trending-up" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">230</h4>
                  <p class="card-text font-small-3 mb-0">Employees</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-info me-2">
                  <div class="avatar-content">
                    <i data-feather="users" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">8</h4>
                  <p class="card-text font-small-3 mb-0">Recent Pay</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-danger me-2">
                  <div class="avatar-content">
                    <i data-feather="box" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">1.423k</h4>
                  <p class="card-text font-small-3 mb-0">Tenure</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-success me-2">
                  <div class="avatar-content">
                    <i data-feather="dollar-sign" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">$9745</h4>
                  <p class="card-text font-small-3 mb-0">Deductions</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Statistics Card -->
  </div>
</section>


<section id="basic-buttons">
  <div class="row">
    <div class="col-12">
      {{-- <div class="card">
        
        <div class="card-body">
         
          <div>
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm"> +Add Record</a>
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createEmployeeForm"> +Create Employee</a>
          </div>
        </div>
      </div> --}}
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
              
              
              <th>Employee Name</th>
              <th>Email</th>
              <th>Basic Salary</th>
              
              <th>Action</th>
            </tr>
          </thead>
          {{-- <tbody>
@foreach($companies_with_employees as $company)




 <tr>
                
                <td>{{$company->name }}</td>
                <td>{{$company->owner}}</td>
                <td>{{$company->location}}</td>
                
                <td>
                  <span>
                 <a href = "company/edit/{{$company->id}}"
                    data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Edit"
                  class="btn btn-outline-primary"><i data-feather='edit'></i></a> 
                 <a href = "company/destroy/{{$company->id}}"
                  data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="Delete"
                 class="btn btn-outline-danger"><i data-feather='trash-2'></i></a> 
                 <a class="btn btn-info">More</a>
                 <a href = "company/{{$company->id}}"
                  data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="View"
                class="btn btn-outline-info"><i data-feather='eye'></i></a>
                 </span>
                </td>
                
            </tr>
@endforeach 
 --}}

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Modal to add new record -->
               <div
                class="modal fade text-start"
                id="inlineForm"
                tabindex="-1"
                aria-labelledby="myModalLabel33"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel33">Create Company</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="company" method="POST">
                      @csrf
                      <div class="modal-body">
                        <label>Company Name: </label>
                        <div class="mb-1">
                          <input type="text" name="name" placeholder="peigh" class="form-control" />
                        </div>

                        <label>Location: </label>
                        <div class="mb-1">
                          <input type="text" name="location" placeholder="Pawpaw Street, Ashongman" class="form-control" />
                        </div>

                        <label>Owner: </label>
                        <div class="mb-1">
                          <input type="text" name="owner" placeholder="Eshun Jonas" class="form-control" />
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>





        <!-- Modal to edit record -->
               <div
                class="modal fade text-start"
                id="createEmployeeForm"
                tabindex="-1"
                aria-labelledby="myModalLabel33"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel33">Create Employee</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/employee" method="POST">
                      @csrf
                      <div class="modal-body">
                        <label>Employee Name: </label>
                        <div class="mb-1">
                          <input type="text" name="employee_name" placeholder="peigh" class="form-control" />
                          <input type="hidden" name="company_id" placeholder="" class="form-control" value="{{ request()->route('id') }}" />
                        </div>

                        <label>Qualification: </label>
                        <div class="mb-1">
                          <input type="text" name="qualification" placeholder="" class="form-control" />
                        </div>

                        <label>TIN number: </label>
                        <div class="mb-1">
                          <input type="number" name="tin_number" placeholder="xxxxxxxxxxxxxx" class="form-control" />
                        </div>

                        <label>Email: </label>
                        <div class="mb-1">
                          <input type="email" name="employee_email" placeholder="name@example.com" class="form-control" />
                        </div>
                        <label>Basic Salary: </label>
                        <div class="mb-1">
                          <input type="number" name="basic_salary" placeholder="name@example.com" class="form-control" />
                        </div>
                        <label>Gross Salary: </label>
                        <div class="mb-1">
                          <input type="number" name="gross_salary" placeholder="name@example.com" class="form-control" />
                        </div>
                        {{-- <label>Owner: </label>
                        <div class="mb-1">
                          <input type="text" name="owner" placeholder="Eshun Jonas" class="form-control" />
                        </div>
                        <label>Owner: </label>
                        <div class="mb-1">
                          <input type="text" name="owner" placeholder="Eshun Jonas" class="form-control" />
                        </div>
                        <label>Owner: </label>
                        <div class="mb-1">
                          <input type="text" name="owner" placeholder="Eshun Jonas" class="form-control" />
                        </div>
                        <label>Owner: </label>
                        <div class="mb-1">
                          <input type="text" name="owner" placeholder="Eshun Jonas" class="form-control" />
                        </div>
                      </div> --}}
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                      </div>
                    </form>
                  </div>
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
   {{-- <script src="{{ asset(mix('js/scripts/pages/dashboard-ecommerce.js')) }}"></script> --}}
@endsection
