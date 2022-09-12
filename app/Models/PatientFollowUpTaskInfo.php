<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientFollowUpTaskInfo extends Model
{
    use HasFactory;

    // public $timestamps = false;

    protected $fillable = [
        'mobile_number',
        'task_id',
        'task_description',
        'new_strategy_calorie_option',
        'building_a_habit',
        'dimensions_of_health',
        'diagnosis',
        'other',
    ];
}
