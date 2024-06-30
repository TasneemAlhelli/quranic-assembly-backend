<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Center;

/**
 * Class Center Contact
 * App\Models
 * 
 * @property string phone_number
 * @property int center_id
 */
class CenterContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'center_id'
    ];
}