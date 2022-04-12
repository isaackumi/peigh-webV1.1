<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaySlip extends Model
{
    use HasFactory;
    protected $fillable = ['employee_name', 'role', 'gross_salary', 'ewa', 'deductions', 'payslip_reference', 'company_id', 'employee_id','overtime', 'month'];
}
