<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('father_education_qualification');
            $table->string('mother_education_qualification');
            $table->string('father_mobile');
            $table->string('mother_mobile');
            $table->string('father_email_id');
            $table->string('mother_email_id');
            $table->string('father_occupation');
            $table->string('mother_occupation');
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
        Schema::dropIfExists('parents_details');
    }
}
