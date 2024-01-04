<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentHealthDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_health_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('disability');
            $table->string('disability_order_number');
            $table->string('height');
            $table->string('weight');
            $table->string('teeth');
            $table->string('oral_hygiene');
            $table->string('remark');
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
        Schema::dropIfExists('student_health_details');
    }
}
