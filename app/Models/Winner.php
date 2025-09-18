<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    protected $fillable = [
        'name',
        'position',
        'title',
        'period',
        'announced_at',
    ];

    // Cast announced_at ke format date
    protected $casts = [
        'announced_at' => 'date',
    ];
}
