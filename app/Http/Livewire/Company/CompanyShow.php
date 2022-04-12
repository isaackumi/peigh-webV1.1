<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;


class CompanyShow extends Component
{
    public $company, $companies_with_employees;
    
    public function render()
    {
        // return view('livewire.company.company-show');
        return view('content.apps.company.company-single')->layout('layouts.contentLayoutMaster');

    }

    public function mount(Company $company)
    {
        $this->company = $company;

        // dd($this->companies_with_employees->name);
        // dd($this->company);
        // $this->all = $company;
    }

    public function fetchOne($id){
        $this->company = Company::find($id);
        
    }
}
