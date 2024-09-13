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
        'content',
        'image'
    ];

    protected $appends = [
        'image_url',
        'type_text'
    ];

    public function getImageUrlAttribute(): string|null
    {
        if (!is_null($this->image) && !empty($this->image)) {
            return env('APP_URL') . '/storage/' . $this->image;
        }
        return null;    
    }

    public function getTypeTextAttribute($value): string 
    {
        if ($this->type == 'inside') {
            return 'في الداخل';
        } else if ($this->type == 'outside') {
            return 'في الخارج';
        } else {
            return '-';
        }
    }
}
