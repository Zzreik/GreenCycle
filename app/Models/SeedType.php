<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeedType extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'cares_per_level',
        'harvest_reward',
    ];
}
