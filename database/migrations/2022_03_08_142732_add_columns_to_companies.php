<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->string('company_id')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            // $table->string('city');
            // $table->string('country');
            // $table->string('email');
            // $table->string('phone_number');
            // $table->string('company_id');
        });
    }
}
