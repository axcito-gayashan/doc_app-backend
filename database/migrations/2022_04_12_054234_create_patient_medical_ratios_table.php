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
        Schema::create('patient_medical_ratios', function (Blueprint $table) {
            $table->bigInteger('mobile_number')->unique();
            $table->foreign('mobile_number')->references('mobile_number')->on('patients');
            $table->integer('weight');
            $table->integer('height');
            $table->string('bmi');
            $table->integer('waist');
            $table->integer('hip');
            $table->integer('waist_hip_ratio');
            $table->integer('bp');
            $table->string('lipid_pannel');
            $table->string('a1c');
            $table->string('current_health_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_medical_ratios');
    }
};
