<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'penyakit_id', 'gejala_id','bobot','nilai'
    ];

    public function gejala(){
        return $this->belongsTo(Gejala::class);   
    }

    public function penyakit(){
        return $this->belongsTo(Penyakit::class);
    }
}
