<?php

namespace App\Models\Relationships;

use App\Models\PoetryAttachment;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait PoetryRelationships
{
  /**
   * Relationship: attachments
   * @return HasMany
   */
  public function attachments(): HasMany
  {
    return $this->hasMany(PoetryAttachment::class);
  }
}