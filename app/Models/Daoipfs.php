<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daoipfs extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'json',
        'symbol',
        'type',
        'token',
        'worth',
        'vote_mode',
        'document',
        'lazy',
        'parent_id',
        'is_subset',
        'is_minted',
        'published',
        'parent',
        'extras',
        'picture',
        'reform_number',
    ];
}
