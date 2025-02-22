<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use HasFactory;

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

    // Model Hook untuk Hash Password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
