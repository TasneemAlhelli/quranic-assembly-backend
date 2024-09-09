<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PoetryAttachment
 * @package App\Models
 * 
 * @property int id
 * @property string attachment
 * @property int poetry_id
 * @property string created_at
 * @property string upated_at
 * @property string deleted_at
 */
class PoetryAttachment extends Model
{
    use HasFactory;
    protected $fillable = [
        'attachment',
        'poetry_id',
    ];

    protected $appends = [
        'attachment_url'
    ];

    public function getAttachmentUrlAttribute(): string 
    {
        return env('APP_URL') . '/storage/' . $this->attachment;
    }}
