<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Character 
 * @package App\Models 
 * 
 * @property int id 
 * @property string name 
 * @property string cv 
 */
class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cv',
    ];


    protected $appends = [
        'cv_url',
    ];


    /**
     * Attribute: cv url
     * @return string
     */
    function getCvUrlAttribute(): string
    {
        return env('APP_URL') . '/storage/' . $this->cv;
    }
}
