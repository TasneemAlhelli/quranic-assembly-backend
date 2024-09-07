<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Class Soiaree
 * @package App\Models 
 * 
 * @property int id
 * @property string name 
 * @property string date 
 * @property string image 
 * @property string image_url
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
*/
class Soiaree extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'place',
        'image'
    ];

    protected $appends = [
        'image_url',
    ];


    /**
     * Attribute: image url
     * @return string
     */
    function getImageUrlAttribute(): string
    {
        return env('APP_URL') . '/storage/' . $this->image;
    }
}
