<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanRequest extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'payslip_id', 'company_id', 'amount', 'date_borrowed', 'cummulative_borrowed_amount', 'history_of_borrowed_amount', 'continuous_borrowing', 'total_accessed_by_employees', 'transaction_status', 'paid_back_status', 'job_queue_status', 'first_approval', 'second_approval'];
}
