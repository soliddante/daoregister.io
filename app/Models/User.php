<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'wallet',
        "type",
        "firstname",
        "lastname",
        "birthday",
        "gendar",
        "phone",
        "password",
        "country",
        "city",
        "postalcode",
        "address",
        "profession",
        "education",
        "university",
        "language_first",
        "language_second",
        "security_question",
        "security_answer",
        "instagram",
        "Twitter",
        "Facebook",
        "Whatsapp",
        "Telegram",
        "linkedin",
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function daos()
    {
        return $this->belongsToMany(Dao::class);
    }
}
