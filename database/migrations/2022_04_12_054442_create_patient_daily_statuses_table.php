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
            $table->string('how_much_did-you-enjoy_today')->nullable();
            $table->integer('how_easy_it_was_the_goal_to_complete')->nullable();
            $table->integer('how_fun_was_the_goal')->nullable();
            $table->string('failure_reason')->nullable();
            $table->string('what_did_you_enjoy_most_about')->nullable();
            $table->string('best_experience_ever')->nullable();
            $table->string('what_would_have_helped_complete_the_goal')->nullable();
            $table->integer('complete_the_goal_tomorrow_rate')->nullable();
            $table->string('challange_barrier')->nullable();
            $table->string('likelihood_you_will_complete_the_challenge_tomorrow')->nullable();
            $table->string('what_would_make_that_a_ten')->nullable();
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
