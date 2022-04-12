<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaySlipRequest;
use App\Http\Requests\UpdatePaySlipRequest;
use App\Models\PaySlip;

class PaySlipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Payslip::all();
        $pageConfigs = [
            'pageHeader' => false,
            'all' => $all

        ];



        return view('/content/apps/payslip/app-payslip', [
            'pageConfigs' => $pageConfigs,
            'all' => $all

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/content/apps/payslip/payslip-create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaySlipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaySlipRequest $request)
    {
        PaySlip::create($request->all());


        return response()->json(['message' => "Payslip created succesfully!"]);

        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaySlip  $paySlip
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $payslip = PaySlip::find($id);
        return view('/content/apps/payslip/payslip-single', [
            'payslip' => $payslip
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaySlip  $paySlip
     * @return \Illuminate\Http\Response
     */
    public function edit(PaySlip $paySlip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaySlipRequest  $request
     * @param  \App\Models\PaySlip  $paySlip
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaySlipRequest $request, PaySlip $paySlip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaySlip  $paySlip
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaySlip $paySlip)
    {
        //
    }



    public function fetchPayslip($id)
    {

        $payslip = PaySlip::find($id);

        return response()->json([
            'payslip' => $payslip
        ]);
    }


    function filterPayslipByMonth($month){
        PaySlip::where('month', 'April 2021')->get();
    }
}
