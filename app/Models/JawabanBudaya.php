<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanBudaya extends Model
{
    use HasFactory;

    protected $table = 'jawaban_budaya';

    protected $fillable = [
        'user_id',
        'pertanyaan_id',
        'nilai_harapan',
        'nilai_kinerja',
    ];

    public function pertanyaan()
    {
        return $this->belongsTo(PertanyaanBudaya::class, 'pertanyaan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
