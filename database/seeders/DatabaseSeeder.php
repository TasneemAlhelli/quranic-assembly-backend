<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Enums\AdminUserRole;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
    public function run(): void
    {
        
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'tasneem',
            'email' => 'tasneem.jameel9@gmail.com',
            'password' => Hash::make('Quranic123*'),
            'role' => AdminUserRole::SUPER_ADMIN
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'm.qurani.n.bh@gmail.com',
            'password' => Hash::make('Quranic123*'),
            'role' => AdminUserRole::SUPER_ADMIN
        ]);
    }
}
