<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientFollowUp extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'time_start',
        'weight',
        'height',
        'bmi',
        'average',
        'self_eval',
        'last_week_exp',
        'main_barriers',
        'main_posotive_themes',
        'main_negative_themes',
        'new_strategy',
        'new_strategy_calorie_option',
        'new_strategy_key_selection',
        'recommendation_task',
        'confident_goal_factor',
        'pre_mortem',
        'time_out',
    ];
}
