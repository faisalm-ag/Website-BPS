<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CulturalModel extends Model
{
    protected $fillable = [
        'title',
        'icon',
        'color',
        'description',
        'points',
    ];

    protected $casts = [
        'points' => 'array',
    ];
}
