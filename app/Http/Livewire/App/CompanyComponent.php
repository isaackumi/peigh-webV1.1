<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use App\Models\Company;

class CompanyComponent extends Component
{
    public $company;

    public function render()
    {
        // return view('livewire.app.company-component')->layout('layouts.contentLayoutMaster');
        return view('content.apps.company.app-company')->layout('layouts.contentLayoutMaster');
    }

    function mount(Company $company)
    {
        $this->company = Company::all();
    }
}
