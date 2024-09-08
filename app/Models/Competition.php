<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Competition 
 * @package App\Models 
 * 
 * @property int id 
 * @property string name 
 * @property string section 
 * @property string founder 
 * @property string supervisor
 * @property string phone_number
 * @property string age
 * @property string goal
 * @property string reason
 * @property string url
 * @property string image
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 */
class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'section',
        'founder',
        'founded',
        'occurrence',
        'supervisor',
        'phone_number',
        'age',
        'goal',
        'reason',
        'url',
        'image'
    ];

    protected $appends = [
        'image_url'
    ];

    public function getImageUrlAttribute(): string 
    {
        return env('APP_URL') . '/storage/' . $this->image;
    }
}
