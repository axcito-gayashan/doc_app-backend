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
        Schema::create('patient_followup_task_diagnoses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('task_id');
            // $table->foreign('task_id')->references('task_id')->on('patient_follow_up_task_infos');
            $table->longText('consume_excess_sugar')->nullable();
            $table->longText('takeaway_foods')->nullable();
            $table->longText('restaurant_foods')->nullable();
            $table->longText('processed_foods')->nullable();
            $table->longText('irregular_eating_habits')->nullable();
            $table->longText('lack_of_water')->nullable();
            $table->longText('regular_alcohol_consumption')->nullable();
            $table->longText('mindless_or_fast_eating')->nullable();
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
        Schema::dropIfExists('patient_followup_task_diagnoses');
    }
};
