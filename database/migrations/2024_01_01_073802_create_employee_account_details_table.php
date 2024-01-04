<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeAccountDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_account_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id');
            $table->string('gis_account_number');
            $table->string('pf_number');
            $table->string('sdo_code');
            $table->string('ge_number');
            $table->string('pan_number');
            $table->string('uid');
            $table->string('signature');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_account_details');
    }
}
