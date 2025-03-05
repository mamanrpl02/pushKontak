<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use HasFactory, Notifiable, CanResetPassword;

    protected $table = 'members'; // Ini harus sama dengan nama tabel Anda di database

    protected $fillable = [
        'nama',
        'noHp',
        'email',
        'password',
        'tokenAkun',
        'gambar',
    ];

    protected $hidden = ['password', 'remember_token']; // Kolom yang perlu disembunyikan
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = $value; // Biarkan Controller yang Hash
    }
}
