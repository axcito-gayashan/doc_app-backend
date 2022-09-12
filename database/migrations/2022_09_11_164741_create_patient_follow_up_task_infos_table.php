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
        Schema::create('patient_follow_up_task_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mobile_number');
            $table->foreign('mobile_number')->references('mobile_number')->on('patients');
            $table->integer('task_id')->nullable();
            $table->string('task_description');
            $table->string('new_strategy_calorie_option')->nullable();
            $table->string('building_a_habit')->nullable();
            $table->longText('dimensions_of_health')->nullable();
            $table->longText('diagnosis')->nullable();
            $table->longText('other')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_follow_up_task_infos');
    }
};
