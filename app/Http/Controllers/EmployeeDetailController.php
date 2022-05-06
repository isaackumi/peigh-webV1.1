<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeDetailRequest;
use App\Http\Requests\UpdateEmployeeDetailRequest;
use App\Models\EmployeeDetail;

class EmployeeDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pageConfigs = [
            'pageHeader' => false,
            // 'contentLayout' => "content-left-sidebar",
            // 'pageClass' => 'email-application',
        ];
        // $all = EmployeeDetail::with('company')->get();
        // $all =EmployeeDetail::with('company')->where('employee_details.company_id', '=', 'companies.id')->get();

        // dd($all);
        $all  = EmployeeDetail::all();
        return view(
            '/content/apps/employee/employee',
            [
                'pageConfigs' => $pageConfigs,
                'all' => $all
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content/apps/employee/employee-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeDetailRequest $request)
    {
        // dd($request);
        EmployeeDetail::create($request->all());

        return back();
    }
// compute net income, PAYE income tax and SNNIT deduction in Ghana
// Take 

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeDetail  $employeeDetail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = EmployeeDetail::find($id);
        // $all = Company::all(); // TODO fetch  all employees under this company..

        return view('content/apps/employee/employee-single', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeDetail  $employeeDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = EmployeeDetail::find($id);
        return view('content/apps/employee/employee-edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeDetailRequest  $request
     * @param  \App\Models\EmployeeDetail  $employeeDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeDetailRequest $request, $id)
    {
        $employee =  EmployeeDetail::find($id)->update($request->all());
        // dd($request);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeDetail  $employeeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = EmployeeDetail::find($id);
        $employee->delete();

        return back();
    }

    public function fetchEmployee($id)
    {
        $employee = EmployeeDetail::find($id);

        // dd($employee);

        return response()->json([
            'employee' => $employee
        ]);
    }
}
