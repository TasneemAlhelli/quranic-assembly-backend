<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseSubject
 * @package App\Models
 * 
 * @property int id
 * @property string subject
 * @property int course_id
 * @property string created_at
 * @property string upated_at
 * @property string deleted_at
 */
class CourseSubject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'course_id',
    ];
}
