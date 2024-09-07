<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseAtachment
 * @package App\Models
 * 
 * @property int id
 * @property string attachment
 * @property int course_id
 * @property string created_at
 * @property string upated_at
 * @property string deleted_at
 */
class CourseAttachment extends Model
{
    use HasFactory;
    protected $fillable = [
        'attachment',
        'course_id',
    ];

    protected $appends = [
        'attachment_url'
    ];

    public function getAttachmentUrlAttribute(): string 
    {
        return env('APP_URL') . '/storage/' . $this->attachment;
    }
}
