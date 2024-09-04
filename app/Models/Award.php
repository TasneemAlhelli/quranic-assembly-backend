<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Award 
 * @package App\Models 
 * 
 * @property int id 
 * @property string name 
 * @property string date 
 * @property string image 
 * @property string created_at
 * @property string upated_at
 * @property string deleted_at

 */
class Award extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'image'
    ];
}
