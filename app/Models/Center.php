<?php

namespace App\Models;

use App\Models\Relationships\CenterRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Center 
 * @package App\Models 
 * 
 * @property int id 
 * @property string name 
 * @property string description 
 * @property string email 
 * @property string founder 
 * @property string supervisor 
 * @property string founded
 * @property string city
 * @property string address
 * @property string instagram
 * @property int gender
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 */
class Center extends Model
{
    use HasFactory, CenterRelationships;

    protected $fillable = [
        'name',
        'description',
        'email',
        'founder',
        'supervisor',
        'founded',
        'city',
        'address',
        'instagram',
        'gender'
    ];
}
