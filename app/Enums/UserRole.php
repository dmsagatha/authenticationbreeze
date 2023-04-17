<?php

namespace App\Enums;

enum UserRole:int
{
  case Admin    = 0;
  case User     = 1;
  case Reviewer = 2;

  public function isAdmin(): bool
  {
    return $this === self::Admin;
  }

  public function isUser(): bool
  {
    return $this === self::User;
  }

  public function isReviewer(): bool
  {
    return $this === self::Reviewer;
  }

  public function getLabelText(): string
  {
    return match ($this) {
      self::Admin => 'Administrador',
      self::User => 'Usuario',
      self::Reviewer => 'Revisor',
    };
  }

  public function getLabelColor(): string
  {
    return match ($this) {
      self::Admin => 'bg-sky-600',
      self::User => 'bg-amber-600',
      self::Reviewer => 'bg-green-600',
    };
  }

  public function getLabelHTML(): string 
  {
    return sprintf('<span class="rounded-md px-2 py-1 text-white %s">%s</span>', $this->getLabelColor(), $this->getLabelText());
  }
}