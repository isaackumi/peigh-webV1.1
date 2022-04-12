<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->nullable();
            $table->foreignId('bank_id')->nullable();
            $table->foreignId('company_id')->nullable();
            $table->string('qualification')->nullable();
            $table->string('date_of_employment')->nullable();
            $table->string('type_of_employment')->nullable();
            $table->string('user_type')->nullable();
            $table->string('tin_number')->nullable();
            $table->string('card_number')->nullable();
            $table->string('basic_salary')->nullable();
            $table->string('gross_salary')->nullable();
            $table->string('default_hours')->nullable();
            $table->string('employee_name')->nullable();
            $table->string('employee_email')->nullable();
            $table->string('leave_date')->nullable();
            $table->boolean('active')->nullable();
            $table->boolean('mobile_user')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_details');
    }
}
