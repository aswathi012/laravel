<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardianDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardian_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('salutation');
            $table->string('name');
            $table->string('relation');
            $table->string('mobile_number');
            $table->string('occupation');
            $table->longtext('work_address');
            $table->string('work_phone');
            $table->decimal('annual_income',10,2);
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
        Schema::dropIfExists('guardian_details');
    }
}
