<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumsToEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_details', function (Blueprint $table) {
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('business_registration_number')->nullable();
            $table->string('photo_url')->nullable();
            $table->string('phone_number')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_details', function (Blueprint $table) {
            $table->dropColumn('city');
            $table->dropColumn('country');
            $table->dropColumn('tax_number');
            $table->dropColumn('business_registration_number');
            $table->dropColumn('photo_url');
            $table->dropColumn('phone_number');
        });
    }
}
