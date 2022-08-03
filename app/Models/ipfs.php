<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipfs extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'image',
    'json',
    'token',
    'email',
    'wallet',
    'firstname',
    'lastname',
    'birthday',
    'gendar',
    'phone',
    'country',
    'city',
    'postalcode',
    'address',
    'profession',
    'education',
    'university',
    'language_first',
    'language_second',
    'instagram',
    'Twitter',
    'Facebook',
    'Whatsapp',
    'Telegram',
    'linkedin',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
   
}
