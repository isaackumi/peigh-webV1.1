
@extends('layouts/contentLayoutMaster')

@section('title', 'Companies')

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
  @livewireStyles
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
  {{-- <livewire:app.company-component/> --}}

  <section id="basic-buttons">
  <div class="row">
    <div class="col-12">
      <div class="card">
        {{-- <div class="card-header">
          <h4 class="card-title">Filled</h4>
        </div> --}}
        <div class="card-body">
          {{-- <p class="card-text mb-0">
            Bootstrap includes six predefined button styles, each serving its own semantic purpose.
          </p> --}}
          <!-- basic buttons -->
          {{-- {{json_decode($users)->email }} --}}
          {{-- {{$users }} --}}
         
          {{-- @foreach (array('users'=>$users) as $user)
            {{gettype($user) }}
          @endforeach --}}
          <div>
            <a class="btn btn-primary" href="/company/new/add"> +Add Company</a>
            {{-- <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createEmployeeForm"> +Create Employee</a> --}}
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
              <th>Comapny Name</th>
              <th>Owner</th>
              <th>Location</th>

              <th>Email</th>
              <th>Phone Number</th>
              

              
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
@foreach($company as $company)




 <tr>
                
                <td>{{$company->company_id}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->owner}}</td>
                <td>{{$company->location}}</td>
                <td>{{$company->email}}</td>
                <td>{{$company->phone_number}}</td>
                
                <td>
                  <span>
                 <a href = "company/edit/{{$company->id}}"
                    data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Edit"
                  class=""><i data-feather='edit'></i></a> 
                 <a href = "company/destroy/{{$company->id}}"
                  data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="Delete"
                 class=""><i data-feather='trash-2'></i></a> 
                 {{-- <a class="btn btn-info">More</a> --}}
                 <a href = "company/{{$company->id}}"
                  data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="View"
                class=""><i data-feather='eye'></i></a>
                 </span>
                </td>
                
            </tr>
@endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div>

  </section>

 @livewireScripts
@include('sweetalert::alert')

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
