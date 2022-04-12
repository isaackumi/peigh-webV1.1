<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;
    protected $fillable = [
        'total_tax_paid',
        'total_social_security_paid',
        'from_date',
        'to_date',
        'total_deductions',
        'total_salaries',
        'total_accessed_by_employees',
        'first_approval',
        'second_approval',
        'payroll_name'
    ];
}
