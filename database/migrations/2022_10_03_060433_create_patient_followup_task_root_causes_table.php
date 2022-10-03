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
        Schema::create('patient_followup_task_root_causes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('task_id');
            // $table->foreign('task_id')->references('task_id')->on('patient_follow_up_task_infos');
            $table->longText('psychological')->nullable();
            $table->longText('physical')->nullable();
            $table->longText('work_related')->nullable();
            $table->longText('social')->nullable();
            $table->longText('financial')->nullable();
            $table->longText('environmental')->nullable();
            $table->longText('substance_use')->nullable();
            $table->longText('habitual_with_no_subreason')->nullable();
            $table->longText('no_exercise_regimen')->nullable();
            $table->longText('inconsistent_exercise_regimen')->nullable();
            $table->longText('other')->nullable();
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
        Schema::dropIfExists('patient_followup_task_root_causes');
    }
};
