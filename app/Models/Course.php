<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Relationships\CourseRelationships;

/**
 * Class Course
 * @package App\Models
 * 
 * @property int id
 * @property string name
 * @property string description
 * @property string type
 * @property string place
 * @property string date
 * @property string content
 * @property string content_heading 
 * @property string created_at
 * @property string upated_at
 * @property string deleted_at
 */
class Course extends Model
{
    use HasFactory, CourseRelationships;
    protected $fillable = [
        'name',
        'description',
        'type',
        'place',
        'date',
        'content_heading',
        'content'
    ];
}
