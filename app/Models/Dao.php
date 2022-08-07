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
        'parent',
        'extras',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('partner_email', 'partner_type', 'partner_share', 'partner_accepted');
    }
    public function extras()
    {
        return $this->hasMany(Extra::class);
    }
}
