<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentPreviousSchoolDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_previous_school_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('school_name');
            $table->string('attendance');
            $table->string('course');
            $table->date('leaving_date');
            $table->string('tc_number');
            $table->date('leaving_tc_date');
            $table->string('reason_for_leaving');
            $table->date('vaccination_date');
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
        Schema::dropIfExists('student_previous_school_details');
    }
}
