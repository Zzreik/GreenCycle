<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tree extends Model
{
    //
    protected $table = 'trees';

    protected $fillable = [
        'seed_type_id', 
        'name', 
        'level', 
        'health', 
        'progress', 
        'status', 
        'last_cared_at',
        'next_care_at',
        'last_decay_at',
        'harvested_at',
    ];

    protected function casts(): array
    {
        return [
            'last_cared_at' => 'datetime',
            'next_care_at'  => 'datetime',
            'last_decay_at' => 'datetime',
            'harvested_at'  => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
