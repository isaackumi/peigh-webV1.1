<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePayrollRequest;
use App\Http\Requests\UpdatePayrollRequest;
use App\Models\Payroll;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Payroll::all();
        $pageConfigs = [
            'pageHeader' => false,
           
        ];

       

        return view('/content/apps/payroll/app-payroll', [
            'pageConfigs' => $pageConfigs,
            'all'=> $all

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $breadcrumbs = [
        //     ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Form Elements"], ['name' => "Input Mask"]
        // ];
        return view('/content/apps/payroll/payroll-create', [
            // 'breadcrumbs' => $breadcrumbs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePayrollRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayrollRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function show(Payroll $payroll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function edit(Payroll $payroll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayrollRequest  $request
     * @param  \App\Models\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayrollRequest $request, Payroll $payroll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payroll $payroll)
    {
        //
    }
}
