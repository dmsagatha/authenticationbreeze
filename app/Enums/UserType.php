<?php

namespace App\Enums;

enum UserType: int
{
  case user     = 0;
  case admin    = 1;
  case reviewer = 2;

  public function label(): string {
    return static::getLabel($this);
  }

  public static function getLabel(self $value): string {
    return match ($value) {
      UserType::user => 'Usuario',
      UserType::admin => 'Admin',
      UserType::reviewer => 'Revisor',
    };
  }
}