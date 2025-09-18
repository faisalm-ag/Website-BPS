<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeBOIndicator extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'color',
    ];
}
