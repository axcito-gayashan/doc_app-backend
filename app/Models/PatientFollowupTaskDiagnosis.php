<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientFollowupTaskDiagnosis extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'task_id',
        'consume_excess_sugar',
        'takeaway_foods',
        'restaurant_foods',
        'processed_foods',
        'irregular_eating_habits',
        'lack_of_water',
        'regular_alcohol_consumption',
        'mindless_or_fast_eating'
    ];
}
