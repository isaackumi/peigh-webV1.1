
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


{{-- <div class="row">
  <div class="col-12">
    <div class="alert alert-primary" role="alert">
      <div class="alert-body">
        <strong>Info:</strong> This layout can be useful for getting started with empty content section. Please check
        the&nbsp;<a
          class="text-primary"
          href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/documentation-layout-empty.html"
          target="_blank"
          >Layout empty documentation</a
        >&nbsp; for more details.
      </div>
    </div>
  </div>
</div> --}}


<section class="invoice-list-wrapper">
  <div class="card">
    <div class="card-datatable table-responsive">
      <table class="invoice-list-table table">
        <thead>
          <tr>
            <th></th>
            <th>#</th>
            <th><i data-feather="trending-up"></i></th>
            <th>Client</th>
            <th>Total</th>
            <th class="text-truncate">Issued Date</th>
            <th>Balance</th>
            <th>Invoice Status</th>
            <th class="cell-fit">Actions</th>
          </tr>
        </thead>
      </table>
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
