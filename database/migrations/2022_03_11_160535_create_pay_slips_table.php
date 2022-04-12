<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaySlipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_slips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->nullable();
            $table->foreignId('loan_request_id')->nullable();
            $table->foreignId('company_id')->nullable();
            $table->string('gross_salary')->nullable();
            $table->string('role')->nullable();
            $table->string('overtime')->nullable();
            $table->string('deductions')->nullable();
            $table->string('ewa')->nullable();
            $table->string('employee_name')->nullable();
            $table->string('payslip_reference')->nullable();
            $table->string('month')->nullable();
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
        Schema::dropIfExists('pay_slips');
    }
}
