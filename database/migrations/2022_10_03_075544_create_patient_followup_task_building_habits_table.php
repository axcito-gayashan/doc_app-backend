<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_followup_task_building_habits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('task_id');
            // $table->foreign('task_id')->references('task_id')->on('patient_follow_up_task_infos');
            $table->longText('building_habit')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_followup_task_building_habits');
    }
};
