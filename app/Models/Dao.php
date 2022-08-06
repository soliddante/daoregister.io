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
        'extras',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function extras()
    {
        return $this->hasMany(Extra::class);
    }
}
