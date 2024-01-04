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
            $table->foreignId('employee_id');
            $table->string('short_name');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('husband_name')->nullable();
            $table->string('gender');
            $table->string('marital_status');
            $table->string('nationality');
            $table->string('religion');
            $table->string('caste');
            $table->string('reservation')->nullable();
            $table->string('blood_group');
            $table->string('native_place');
            $table->string('identification_mark');
            $table->string('information');
            $table->string('file');
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
        Schema::dropIfExists('employee_details');
    }
}
