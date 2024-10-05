<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'login' => 'manager',
            'password' => Hash::make('manager'),
            'role_id' => 1,
        ]);

        User::create([
            'login' => 'partner',
            'password' => Hash::make('partner'),
            'role_id' => 2,
        ]);
    }
}
