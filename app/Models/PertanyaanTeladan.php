<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertanyaanTeladan extends Model
{
    use HasFactory;

    protected $table = 'pertanyaan_teladan';

    protected $fillable = [
        'kategori',
        'pertanyaan',
    ];
}
