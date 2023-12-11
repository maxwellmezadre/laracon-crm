<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, BelongsToMany};

class Conference extends Model
{
    use HasFactory;

    protected $casts = [
        'id'         => 'integer',
        'start_date' => 'datetime',
        'end_date'   => 'datetime',
        'local_id'   => 'integer',
    ];

    public function local(): BelongsTo
    {
        return $this->belongsTo(Local::class);
    }

    public function speakers(): BelongsToMany
    {
        return $this->belongsToMany(Speaker::class);
    }

    public function talks(): BelongsToMany
    {
        return $this->belongsToMany(Talk::class);
    }
}
