<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientFollowupTaskStrategyCalorieout extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'task_id',
        'calorie_out_exercise',
        'calorie_out_duration',
        'calorie_out_frequency_week',
        'calorie_out_online_offline',
        'calorie_out_solo_group',
        'calorie_out_reward'
    ];
}
