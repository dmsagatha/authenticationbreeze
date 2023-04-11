<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // \App\Models\User::factory(10)->create();

    User::factory()->create([
      'name'     => 'Super Admin',
      'email'    => 'superadmin@admin.net',
      'password' => Hash::make('superadmin'),
      'role'     => \App\Enums\UserRole::Admin,
    ]);

    User::create([
      'name'     => 'Agatha Dms',
      'email'    => 'agatha@tmp.com',
      'password' => Hash::make('agatha'),
      'role'     => \App\Enums\UserRole::User,
    ]);
  }
}