<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientFollowupTaskRootCause extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'task_id',
        'psychological',
        'physical',
        'work_related',
        'social',
        'financial',
        'environmental',
        'substance_use',
        'habitual_with_no_subreason',
        'no_exercise_regimen',
        'inconsistent_exercise_regimen',
        'other'
    ];
}
