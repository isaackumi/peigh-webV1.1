<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->nullable();
            $table->foreignId('payslip_id')->nullable();
            $table->foreignId('company_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('date_borrowed')->nullable();
            $table->string('cummulative_borrowed_amount')->nullable();
            $table->string('history_of_borrowed_amount')->nullable();
            $table->string('continuous_borrowing')->nullable();
            $table->string('total_accessed_by_employees')->nullable();
            $table->string('transaction_status')->nullable();
            $table->string('paid_back_status')->nullable();
            $table->string('job_queue_status')->nullable();
            $table->string('first_approval')->nullable();
            $table->string('second_approval')->nullable();
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
        Schema::dropIfExists('loan_requests');
    }
}
