<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->string('total_tax_paid')->nullable();
            $table->string('total_social_security_paid')->nullable();
            $table->string('from_date')->nullable();
            $table->string('to_date')->nullable();
            $table->string('total_deductions')->nullable();
            $table->string('total_salaries')->nullable();
            $table->string('total_accessed_by_employees')->nullable();
            $table->string('first_approval')->nullable();
            $table->string('second_approval')->nullable();
            $table->string('payroll_name')->nullable();
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
        Schema::dropIfExists('payrolls');
    }
}
