<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertanyaanBudaya extends Model
{
    use HasFactory;

    protected $table = 'pertanyaan_budaya';

    protected $fillable = [
        'kategori',
        'pertanyaan',
    ];
}
