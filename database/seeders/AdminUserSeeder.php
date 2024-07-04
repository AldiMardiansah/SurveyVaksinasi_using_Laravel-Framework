<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'adminsurvey',
            'email' => 'adminadmin@gmail.com',
            'password' => Hash::make('surveyadmin'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'adminsurvey2',
            'email' => 'adminadmin2@gmail.com',
            'password' => Hash::make('surveyadmin2'),
            'role' => 'admin',
        ]);
    }
}
