<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_meetings', function (Blueprint $table) {
            $table->id();
            $table->string('meeting_title');
            $table->foreignId('organization_id');
            $table->date('meeting_date');
            $table->time('meeting_time');
            $table->foreignId('location_id');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('organization_meetings');
    }
}
