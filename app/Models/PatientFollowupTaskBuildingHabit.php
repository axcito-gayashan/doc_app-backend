<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientFollowupTaskBuildingHabit extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'building_habit'
    ];
}
