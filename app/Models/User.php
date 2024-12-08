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


    protected $fillable = [
        'name',
        'email',
        'password',
        'level',
        'photo',
    ];

    //memanggil data dalam user ke soal_ipa
    public function ipa()
    {
        return $this->hasMany(Ipa::class, 'id_user', 'id');
    }

    //memanggil data dalam user ke soal_ips
    public function ips()
    {
        return $this->hasMany(Ips::class, 'id_user', 'id');
    }


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
