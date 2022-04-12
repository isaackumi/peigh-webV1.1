<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetail extends Model
{
    use HasFactory;
    protected $fillable = ['qualification', 'date_of_employment', 'type_of_employment', 'tin_number', 'user_type', 'card_number', 'basic_salary', 'gross_salary', 'default_hours', 'leave_date', 'active', 'mobile_user','employee_name','employee_email','company_id','city','country','tax_number', 'business_registration_number', 'photo_url', 'phone_number'];


    function company(){
       return $this->hasOne(Company::class);
    }
}


