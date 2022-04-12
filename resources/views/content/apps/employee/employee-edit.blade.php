@extends('layouts/contentLayoutMaster')

{{-- @section('title', 'Edit Company') --}}



@section('content')

 <!-- Modal to add new record -->
              
                <section class="basic-input">
 <div class="col-md-12">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel33">Edit Employee Details</h4>
                    
                    </div>
                    <form action="/employee/update/{{$employee->id}}" method="POST">
                      @csrf
                      <div class="modal-body">
                        <label>Employee Name: </label>
                        <div class="mb-1">
                          <input type="text" name="employee_name" placeholder="peigh" class="form-control" value="{{$employee->employee_name}}" />
                          {{-- <input type="hidden" name="company_id" placeholder="" class="form-control" value="{{ request()->route('id') }}" /> --}}
                        </div>

                        <label>Qualification: </label>
                        <div class="mb-1">
                          <input type="text" name="qualification" placeholder="" class="form-control" value="{{$employee->qualification}}"/>
                        </div>

                        <label>TIN number: </label>
                        <div class="mb-1">
                          <input type="number" name="tin_number" placeholder="xxxxxxxxxxxxxx" class="form-control" value="{{$employee->tin_number}}"/>
                        </div>

                        <label>Email: </label>
                        <div class="mb-1">
                          <input type="email" name="employee_email" placeholder="name@example.com" class="form-control"  value="{{$employee->employee_email}}"/>
                        </div>
                        <label>Basic Salary: </label>
                        <div class="mb-1">
                          <input type="number" name="basic_salary" placeholder="name@example.com" class="form-control" value="{{$employee->basic_salary}}" />
                        </div>
                        <label>Gross Salary: </label>
                        <div class="mb-1">
                          <input type="number" name="gross_salary" placeholder="name@example.com" class="form-control" value="{{$employee->gross_salary}}"/>
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
                </section>
                 
             
          


@endsection