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
        Schema::create('patient_daily_statuses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mobile_number');// Should be added letter
//            $table->foreign('mobile_number')->references('mobile_number')->on('patients');
            $table->date('eval_date');
            $table->string('follow_rec');
            $table->string('recommended_task')->nullable();
            $table->string('experience_enj_count')->nullable();
            $table->string('failure_reason')->nullable();
            $table->string('enjoy_exp')->nullable();
            $table->string('best_exp')->nullable();
            $table->string('magical_solution')->nullable();
            $table->string('challange_barrier')->nullable();
            $table->string('challange_tomorrow')->nullable();
            $table->string('make_ten')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_daily_statuses');
    }
};
