<?php

namespace App\Enums;

enum UserRole: string
{
  use BaseEnum;

  case Admin = 'admin';
  case User  = 'user';
}