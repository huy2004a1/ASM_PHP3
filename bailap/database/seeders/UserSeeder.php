<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 10) as $index) {
            User::create([
                'name' => 'User ' . $index,
                'email' => 'user' . $index . '@example.com',
                'password' => Hash::make('password'), // Mật khẩu mặc định
            ]);
        }
    }
}
