<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDailyStatus extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'mobile_number',
        'eval_date',
        'follow_rec',
        'experience_enj_count',
        'failure_reason',
        'enjoy_exp',
        'best_exp',
        'magical_solution',
        'challange_barrier',
        'challange_tomorrow',
        'make_ten'

    ];
}
