<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientFollowupTaskStrategyCaloriein extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'task_id',
        'calorie_in_volume_size',
        'calorie_in_frequency',
        'calorie_in_content_sugar',
        'calorie_in_content_salt',
        'calorie_in_content_falt',
        'calorie_in_alternatives',
        'calorie_in_timing_of_uptake',
        'calorie_in_grocery_shopping_places',
        'calorie_in_grocery_shopping_falt',
        'calorie_in_multi_course'
    ];
}
