<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoanRequestRequest;
use App\Http\Requests\UpdateLoanRequestRequest;
use App\Models\LoanRequest;

class LoanRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = LoanRequest::all();
        $pageConfigs = [
            'pageHeader' => false,

        ];



        return view('/content/apps/loan-request/app-loan-request', [
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
        return view('/content/apps/loan-request/loan-request-create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoanRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoanRequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoanRequest  $loanRequest
     * @return \Illuminate\Http\Response
     */
    public function show(LoanRequest $loanRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoanRequest  $loanRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(LoanRequest $loanRequest)
    {

        return view('content/apps/loan-request/loan-request-edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoanRequestRequest  $request
     * @param  \App\Models\LoanRequest  $loanRequest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoanRequestRequest $request, LoanRequest $loanRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoanRequest  $loanRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoanRequest $loanRequest)
    {
        //
    }
}
