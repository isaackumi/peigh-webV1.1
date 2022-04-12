<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  use HasFactory;
  protected $fillable = ['name', 'location', 'owner', 'city', 'country', 'email', 'phone_number', 'company_id'];


  function employees()
  {
    return  $this->hasMany(EmployeeDetail::class,'employee_id');
  }
}
