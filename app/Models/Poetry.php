<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poetry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'founder',
        'activity_type',
        'founded',
        'background',
        'goal',
        'member',
        'phone_number',
        'instagram'
    ];
}
