<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyakitDeskripsi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'penyakit_id', 'deskripsi', 'penyebab', 'pengobatan'
    ];
}
