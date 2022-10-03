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
        Schema::create('patient_followup_task_strategy_calorieins', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('task_id');
            $table->foreign('task_id')->references('task_id')->on('patient_follow_up_task_infos');
            $table->longText('calorie_in_volume_size')->nullable();
            $table->longText('calorie_in_frequency')->nullable();
            $table->longText('calorie_in_content_sugar')->nullable();
            $table->longText('calorie_in_content_salt')->nullable();
            $table->longText('calorie_in_content_falt')->nullable();
            $table->longText('calorie_in_alternatives')->nullable();
            $table->longText('calorie_in_timing_of_uptake')->nullable();
            $table->longText('calorie_in_grocery_shopping_places')->nullable();
            $table->longText('calorie_in_grocery_shopping_falt')->nullable();
            $table->longText('calorie_in_multi_course')->nullable();
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
        Schema::dropIfExists('patient_followup_task_strategy_calorieins');
    }
};
