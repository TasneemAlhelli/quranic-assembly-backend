<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Relationships\PoetryRelationships;

/**
 * Class Poetry 
 * @package App\Models 
 * 
 * @property int id 
 * @property string name 
 * @property string founder 
 * @property string activity_type 
 * @property string founded 
 * @property string background 
 * @property string goal 
 * @property string member 
 * @property string phone_number 
 * @property string instagram 
 * @property string created_at 
 * @property string upated_at 
 * @property string deleted_at 
 */
class Poetry extends Model
{
    use HasFactory, PoetryRelationships;

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
