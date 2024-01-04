<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_informations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreignId('standard_id');
            $table->integer('kalari');
            $table->integer('noon_feeding');
            $table->integer('bpl');
            $table->string('bus_route');
            $table->integer('conveyance_needed');
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
        Schema::dropIfExists('student_informations');
    }
}
