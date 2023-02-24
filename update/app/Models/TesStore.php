<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesStore extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'gejala_id', 'penyakit_id'
    ];

    public function gejala()
    {
        return $this->belongsTo(Gejala::class);
    }
}
