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
@livewireStyles

@endsection 
@section('content')



<div id="app">

<section id="basic-buttons">
  
  <div class="row">
    <div class="col-12">
      <h4 class="page-header mb-2">Create Payslip</h4>
       {{-- <button class="btn btn-primary" wire:click='addOne'>+</button> --}}
      <div class="card">
        {{-- {{$employee}} --}}
        


         <div class="card-body">
          
          <div class=" col-md d-flex">
            <input type="text" id="search_term" placeholder=" Search employee" class="form-control "  required/>
            
            {{-- <a class="btn btn-primary" href="/payslip/new/add"> + Create Payslip</a> --}}
            {{-- <a class="btn btn-info ms-50" href="/payroll/create"> + Create Payroll</a> --}}
            <div class="ms-2">
            <a class="btn btn-primary" id="search-btn"> Search Employee</a>
       
          </div>
          </div>
          <div style="display:inline;" class="mb-5">
            <h5 class="" id="employee_name"></h5>
            <h5 class=""id="employee_id"></h5>
            <h5 class="" id="employee_department"></h5>
          </div>
          
            {{-- <h5 class="page-header">@{{search_term}}</h5> --}}
        </div>
          
          {{-- <div class="col-md d-flex">

            <form method="post" action="">
            <a class="btn btn-primary" href="/payslip/new/add"> + Create Payslip</a>
            <input type="text" name="search_term" placeholder=" Search employee" class="form-control col-xl-4 " />

            <div class="ms-2 d-flex">
            <button type="submit"  class="btn btn-primary ms-50">Submit</button>

            </div>

             </form> --}}
            
            {{-- <div class="ms-5">
            
            <select id="month" class="form-select text-capitalize">
              <option value=""> Select Month </option>
              <option>January</option>
              <option>Febuary</option>
              <option>March</option>
            
            </select>
            
              
            
          </div> --}}
          {{-- </div> --}}

          {{-- <div class=" col-xs-12 col-sm-6 display-flex">
            <h5 class="page-header">Employee Name</h5>
            <h5 class="page-header">Employee ID</h5>
            <h5 class="page-header">Employee Department</h5>
            <h5 class="page-header">@{{search_term}}</h5>
          </div> --}}
       
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
          <h4 class="card-title">Payment Info</h4>
        </div>

     <form id="payslip-form">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="credit-card">Gross Salary</label>
              <input
                type="text"
                class="form-control"
                placeholder=""
                id="gross_salary"
                name=""
                {{-- wire:model="role" --}}
                
              />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="credit-card">PAYE</label>
              <input
                type="number"
                class="form-control"
                placeholder=""
                id="paye"
                name="paye"
                value=""
                {{-- wire:model={{$role}} --}}
              />
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="credit-card">SSNIT Contribution</label>
              <input
                type="text"
                class="form-control"
                placeholder=""
                id="ssnit_contribution"
                name="ssnit_contribution"
                value=""
              />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="credit-card">Earned Wage Accessed</label>
              <input
                type="number"
                class="form-control"
                placeholder=""
                id="ewa"
                name="ewa"
              />
            </div>
          <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="credit-card">Net salary</label>
              <input
                type="number"
                class="form-control"
                placeholder=""
                id="net_salary"
                name="net_salary"
                
                value=""

              />
            </div>
             {{-- <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="credit-card">Net salary</label>
              <input
                type="number"
                class="form-control"
                placeholder=""
                id="credit-card"
                name="gross_salary"
                value=""

              />
            </div> --}}
           

            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label class="form-label" for="credit-card">Month</label>
              <input
                type="text"
                class="form-control"
                placeholder=""
                id="month"
                name="month"
                value="{{Carbon\Carbon::parse(now())->format('F Y')}}"
              />
            </div>

            <input id="company_id" type="hidden"  value="">
            <input id="employee_id" type="hidden"  value="">
            <input id="payslip_reference" type="hidden"  value="">
            <input id="employee_name" type="hidden"  value="">
            
         
          </div>
          <div class="">
            <button  id="payslip-btn" class="btn btn-primary">Submit</button>
           </div>
        </div>

    </form>
      </div>
    </div>
  </div>

</section>
</div>
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
   {{-- @livewireScripts --}}
   <script src="https://unpkg.com/vue@3.0.7/dist/vue.global.js"></script>


   <script src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">

      
</script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
{{-- <script>
         jQuery(document).ready(function(){
            jQuery('#search').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "{{ url('/employee/search') }}",
                  method: 'post',
                  data: {
                     search_term: jQuery('#search_term').val(),
                     
                  },
                  success: function(result){
                     console.log(result);
                  }});
               });
            });
</script> --}}
{{-- <script>

  const Payslip = {
    data(){
      return {
        name: 'Payslip',
        role: "",
        search_term: "",
      }
    },

    methods: {
      sayHello: ()=> {
        return "Hello"
      },

      fectchEmployee: ()=> {
        axios.get('https://jsonplaceholder.typicode.com/users')
        .then(function(res){
          alert(data)

        })
        .catch(function (res){
          alert('error')
        })
      }
    }
  }


  const app = Vue.createApp(Payslip).mount('#app');
</script> --}}


<script type="text/javascript">
   $(document).ready(function () {

    // toastr.success("page Loaded Successfully");

$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            // "Access-Control-Allow-Origin":"*"
        }
    });


    $(document).on('click','#search-btn', function(e){
      e.preventDefault();
      // alert("here")
    var search_term = $('#search_term').val();

      fetchEmployee(search_term);
    })
    

    // function createPayslip(){
    //   ajax
    // }

    // submit a form to database with ajax post
    $(document).on('click', '#payslip-btn', function (e){
      e.preventDefault();
      // console.log("hello here")
      var data = {
        'net_salary': $('#net_salary').val(),
        'payslip_reference': $('#payslip_reference').val(),
        'gross_salary': $('#gross_salary').val(),
        'ewa': $('#ewa').val(),
        'month': $('#month').val(),
        'ssnit_contribution': $('#ssnit_contribution').val(),
        'paye': $('#paye').val(),
        'employee_id': $('#employee_id').val(),
        'employee_name': $('#employee_name').val(),
        'company_id': $('#company_id').val(),
        
      }
      // console.log(data)



       $.ajax({
        url: "/payslip",
        method: 'post',
        data: data,
        dataType: "JSON",
        success: function(result){
          new Notify({
          status: 'success',
          text: 'payslip created successfully',
          autoclose: true,
          timeout: 3000,
          type: 3
  })
          console.log(result);
          // alert("Payslip Created")
          // window.location.href = "{{ route('payslip.index') }}";
        }
      });
    })

    function fetchEmployee(search_term){
      $.ajax({
        type: "GET",
        url:`/employee/search/${search_term}`,
        dataType: "JSON",
        success: function(data){

          if(data.employee == null){
             new Notify({
          status: 'error',
          text: 'Employee not found!',
          autoclose: true,
          timeout: 3000,
          type: 3
  })
          }else{
          console.log(data);
          // console.log(data['gross_salary']);
          var gross_salary = data.employee.gross_salary;
          var basic_salary = data.employee.basic_salary;
          var employee_name = data.employee.employee_name;
          var employee_id = data.employee.id;
          var company_id = data.employee.company_id;
          var employee_email = data.employee.employee_email;
          var paye = data.employee.paye;
          var employee_department = data.employee.department_id;
          var payslip_ref = $("#month").val();
          var ssnit_contribution = 2300;
          var paye = 50;
          var ewa = 70;
          var net_salary = netSalaryCalculator(gross_salary,basic_salary,ewa);



          $("#gross_salary").val(gross_salary);
          $("#net_salary").val(net_salary);
          $("#ewa").val(ewa);
          $("#ssnit_contribution").val(ssnit_contribution);
          $("#paye").val(paye);
          $("#employee_id").html(`EMP000${employee_id}`);
          $("#company_id").val(company_id);
          $("#employee_name").html(employee_name);
          $("#payslip_reference").val(payslip_ref);

          
        }},
        error: function(res){
          console.log(res);
          new Notify({
          status: 'error',
          text: 'Invalid Employee ID',
          autoclose: true,
          timeout: 3000,
          type: 3
  })
        }
      })
    }



    function netSalaryCalculator(gross,basic,ewa){
        return gross - basic - ewa;
    }


    function ewaCalculator(){}



//  fetchEmployee()
   
  //   $('body').on('click', '#search-btn', function () {
  //     // var search_term = $(this).data('search_term');
  //     var search_term = $('#search_term').val();
  //     // alert(search_term);
  //     // alert(location.host)
  //     const url = '/employee/search/'+search_term;
  //     alert(url)

  //      $.ajax({
  //       type: "GET",
  //       url:url,
  //       dataType: "JSON",
  //       success: function(data){
  //         console.log(data);
  //       }
  //     })


  //     // $.get(url, function (data) {
  //     //    alert(data)
  //     //    console.log(data)
  //     //     // $('#ajax-modal').modal('show');
  //     //     // $('#user_id').val(data.id);
  //     //     // $('#name').val(data.name);
  //     //     // $('#email').val(data.email);
  //     //  });
  //  });
   
  });
</script>
 
   
  


@endsection


