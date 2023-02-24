<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesStatus extends Model
{
    use HasFactory;
    public $timelapse = false;

    protected $fillable = [
        'user_id', 'status'
    ];
}
