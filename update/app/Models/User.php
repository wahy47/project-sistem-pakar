<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;
    protected $table = 'users';

    protected $fillable = [
        'nama',
        'nope',
        'email',
        'usia',
        'usia_pernikahan',
        'jenis_kelamin',
        'alamat',
        'password',
        'unhash',
        'role'
    ];

    public function status()
    {
        return $this->hasMany(Pasien::class);
    }
}
