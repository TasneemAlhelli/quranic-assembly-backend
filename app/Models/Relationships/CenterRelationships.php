<?php

namespace App\Models\Relationships;

use App\Models\CenterContact;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait CenterRelationships
{

  /**
   * Relationship: Contacts
   * @return HasMany
   */
  public function contacts(): HasMany
  {
    return $this->hasMany(CenterContact::class);
  }
}