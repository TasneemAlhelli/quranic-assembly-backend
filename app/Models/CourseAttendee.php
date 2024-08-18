<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseAttendee
 * @package App\Models
 * 
 * @property int id
 * @property string name
 * @property int course_id
 * @property string created_at
 * @property string upated_at
 * @property string deleted_at
 */
class CourseAttendee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'course_id',
    ];
}
