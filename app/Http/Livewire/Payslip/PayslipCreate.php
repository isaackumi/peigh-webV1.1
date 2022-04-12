<?php

namespace App\Http\Livewire\Payslip;

use Livewire\Component;
use App\Models\EmployeeDetail;

class PayslipCreate extends Component
{
    public $employee;
    public $role = "Manager";
    public $search_term = "you";
    public $gross_salary = "0.00";
    public $employee_name = "";
    public $count = 5;


    public function render()
    {

        // return view('livewire.payslip.payslip-create')->layout('layouts.contentLayoutMaster');
        return view('content.apps.payslip.payslip-create')->layout('layouts.contentLayoutMaster');
    }

    public function mount()
    {
        // $this->employee = EmployeeDetail::where('employee_id', $employee->)
        // $this->search_term = '%' . $this->search_term . '%';
        // $this->employee = EmployeeDetail::where('employee_name', '=', $search_term)->get();
        $this->employee = EmployeeDetail::all();
        // dd($this->employee);

    }


    public function addOne()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
}
