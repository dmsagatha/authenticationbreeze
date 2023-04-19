<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // \App\Models\User::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);

    $users = [
      [
        'name'     => 'Super Admin',
        'email'    => 'superadmin@admin.net',
        'role'     => 0,
        'password' => bcrypt('superadmin'),
      ],
      [
        'name'     => 'Agatha',
        'email'    => 'agatha@tmp.com',
        'role'     => 1,
        'password' => bcrypt('agatha'),
      ],
      [
        'name'     => 'Manager User',
        'email'    => 'manager@tutsmake.com',
        'role'     => 2,
        'password' => bcrypt('123456'),
      ],
    ];

    foreach ($users as $key => $user)
    {
      User::create($user);
    }

    User::factory(5)->create();
  }
}