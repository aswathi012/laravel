<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolIntervalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_intervals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('working_day_id');
            $table->foreignId('institute_id');
            $table->time('morning_break_start_time');
            $table->time('morning_break_end_time');
            $table->time('evening_break_start_time');
            $table->time('evening_break_end_time');
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
        Schema::dropIfExists('school_intervals');
    }
}
