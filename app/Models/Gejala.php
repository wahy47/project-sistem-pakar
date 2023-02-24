<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'gejalas';
    
    protected $fillable = [
        'gejala'
    ];

    public function bobot(){
        return $this->hasMany(Bobot::class);
    }
}
