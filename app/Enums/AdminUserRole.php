<?php

namespace App\Enums;

use Illuminate\Contracts\Support\DeferringDisplayableValue;


enum AdminUserRole: int implements DeferringDisplayableValue {
  case SUPER_ADMIN = 0;
  case ADMIN = 1;
  case USER = 2;

  public function resolveDisplayableValue(): string {
    return match ($this) {
      self::SUPER_ADMIN => 'Super Admin',
      self::ADMIN => 'Admin',
      self::USER => 'User',
    };
  }
}