<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightLoseGoal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'mobile_number',
        'goal',
        'goal_id',
        'target_weight',
        'desired_time_frame',
        'motivation_factor_for_goal_manual',
        'motivation_factor_for_goal_selected',
        'level_of_motivation',
        'motivation_target_10_text',
        'contribute_favtors_selected',
        'contribute_favtors_frequency',
//        'contribute_favtors_manually_added',
        'no_one_fouca_factor',
        'previously_attempted',
        'attempted_yes_success_factors',
        'attempted_yes_success_challenges',
        'attempted_no_success_factors',
        'attempted_no_success_challenges',
        'what_stopped_you_from_continue',
        'what_has_prevented_you_from_restarting',
        'confident_factor',
        'confident_to_change_encouragement',
        'look_forward_factors',
    ];
}
