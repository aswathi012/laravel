<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('admission_number');
            $table->string('app_number');
            $table->date('admission_date');
            $table->string('recervation');
            $table->string('admission_tc_number');
            $table->string('admission_tc_date');
            $table->foreignId('standard_id');
            $table->foreignId('division_id');
            $table->integer('class_roll_no');
            $table->string('second_language');
            $table->foreignId('medium_id');
            $table->foreignId('house_id');
            $table->integer('cbse_roll_number');
            $table->integer('cbse_register_number');
            $table->integer('register_number');
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
        Schema::dropIfExists('admission_details');
    }
}
