<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dao extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'symbol',
        'type',
        'token',
        'worth',
        'vote_mode',
        'document',
        'lazy',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
