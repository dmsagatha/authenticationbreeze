<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
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
        'type'     => 1,
        'password' => bcrypt('superadmin'),
      ],
      [
        'name'     => 'Manager User',
        'email'    => 'manager@tutsmake.com',
        'type'     => 2,
        'password' => bcrypt('123456'),
      ],
      [
        'name'     => 'User',
        'email'    => 'user@tutsmake.com',
        'type'     => 0,
        'password' => bcrypt('123456'),
      ],
    ];
    
    foreach ($users as $key => $user) {
      User::create($user);
    }
  }
}