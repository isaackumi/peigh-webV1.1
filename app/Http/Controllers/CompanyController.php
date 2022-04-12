<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();

        return view('content/apps/company/app-company', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content/apps/company/company-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        Company::create($request->all());

        return back()->with('toast_success', 'Company created Successfully!')->with('loader',true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        // $all = DB::table('companies')->join('employee_details', 'companies.employee_id', '=', $id)->get(); 
       
        $all = DB::table('companies')->join('employee_details', 'companies.employee_id', '=', 'employee_details.id')->get(); // TODO fetch  all employees under this company..
        dd($all);
        return view('content/apps/company/company-single', compact('company', 'all'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('content/apps/company/company-edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, $id)
    {
        $company =  Company::find($id)->update($request->all());
        // dd($request);
        return back()->with('toast_info', 'Company Updated Successfully!')->with('loader', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return back()->with('toast_warning', $company->name.' deleted successfully')->with('loader', true);
    }

    public function showCreateNewForm()
    {
        // return view('content/apps/company/company-create');
        dd("here");
    }
}
