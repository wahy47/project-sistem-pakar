<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'penyakit'
    ];

    public function bobot()
    {
        return $this->hasMany(Bobot::class);
    }
    public function deskripsi()
    {
        return $this->hasOne(PenyakitDeskripsi::class);
    }
}
