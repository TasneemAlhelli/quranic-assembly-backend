<?php

namespace App\Enums;

use Illuminate\Contracts\Support\DeferringDisplayableValue;


enum CenterGender: int implements DeferringDisplayableValue {
  case GIRLS = 0;
  case BOYS = 1;
  case BOTH = 2;

  public function resolveDisplayableValue(): string {
    return match ($this) {
      self::GIRLS => 'Girls',
      self::BOYS => 'Boys',
      self::BOTH => 'Both',
    };
  }
}