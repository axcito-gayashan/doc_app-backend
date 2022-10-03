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
        Schema::create('patient_followup_task_strategy_calorieouts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('task_id');
            // $table->foreign('task_id')->references('task_id')->on('patient_follow_up_task_infos');
            $table->longText('calorie_out_exercise')->nullable();
            $table->longText('calorie_out_duration')->nullable();
            $table->longText('calorie_out_frequency_week')->nullable();
            $table->longText('calorie_out_online_offline')->nullable();
            $table->longText('calorie_out_solo_group')->nullable();
            $table->longText('calorie_out_reward')->nullable();
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
        Schema::dropIfExists('patient_followup_task_strategy_calorieouts');
    }
};
