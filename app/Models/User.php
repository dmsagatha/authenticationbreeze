<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\UserType;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'email',
    'password',
    'type',
  ];

  /**
   * Users: 0=>User, 1=>Admin, 2=>Manager
   * Interact with the user's first name.
   *
   * @param  string  $value
   * @return \Illuminate\Database\Eloquent\Casts\Attribute
   */
  protected function type(): Attribute
  {
    return new Attribute(
      get:fn($value) => ["user", "admin", "reviewer"][$value]
    );
  }
  
  protected $hidden = [
    'password',
    'remember_token',
  ];
  
  protected $casts = [
    'email_verified_at' => 'datetime',
    'type' => UserType::class
  ];
}