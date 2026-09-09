<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    //
    protected $table = 'trees';

    protected $fillable = [
        'user_id', 
        'seed_type_id', 
        'name', 
        'level', 
        'health', 
        'progress', 
        'status', 
        'next_care_at',
    ];
}
