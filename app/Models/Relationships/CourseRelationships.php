<?php

namespace App\Models\Relationships;

use App\Models\CourseSubject;
use App\Models\CourseAttendee;
use App\Models\CourseAttachment;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait CourseRelationships
{

  /**
   * Relationship: subjects
   * @return HasMany
   */
  public function subjects(): HasMany
  {
    return $this->hasMany(CourseSubject::class);
  }

  /**
   * Relationship: attendees
   * @return HasMany
   */
  public function attendees(): HasMany
  {
    return $this->hasMany(CourseAttendee::class);
  }

  /**
   * Relationship: attachments
   * @return HasMany
   */
  public function attachments(): HasMany
  {
    return $this->hasMany(CourseAttachment::class);
  }
}