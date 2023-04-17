<?php

namespace App\Enums;

enum UserType: int
{
  case user     = 0;
  case admin    = 1;
  case reviewer = 2;

  /* public function label(): string {
    return static::getLabelText($this);
  }

  public static function getLabelText(self $value): string {
    return match ($value) {
      UserType::user => 'Usuario',
      UserType::admin => 'Admin',
      UserType::reviewer => 'Revisor',
    };
  } */

  // https://www.youtube.com/watch?v=4aucMWM2AzY&ab_channel=LaravelDaily
  public function isAdmin(): bool
  {
    // return $this === static::admin;
    return $this === self::admin;
  }
  public function isUser(): bool
  {
    // return $this === static::user;
    return $this === self::user;
  }
  public function isReviewer(): bool
  {
    // return $this === static::reviewer;
    return $this === self::reviewer;
  }

  public function getLabelText(): string
  {
    return match ($this) {
      self::user => 'Usuario',
      self::admin => 'Admin',
      self::reviewer => 'Revisor',
    };
  }

  public function getLabelColor(): string
  {
    return match ($this) {
      self::user => 'bg-sky-600',
      self::admin => 'bg-amber-600',
      self::reviewer => 'bg-green-600',
    };
  }

  public function getLabelHTML(): string {
    return sprintf('<span class="rounded-md px-2 py-1 text-white %s">%s</span>', $this->getLabelColor(), $this->getLabelText());
  }

  public static function forMigration(): array {
    return collect(self::cases())
      ->map(function ($enum) {
        if (property_exists($enum, "value")) return $enum->value;
        return $enum->name;
      })
      ->values()
      ->toArray();
  }
}