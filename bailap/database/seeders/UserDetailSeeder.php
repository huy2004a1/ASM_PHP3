<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lấy tất cả người dùng
        $users = User::all();

        foreach ($users as $user) {
            UserDetail::create([
                'user_id' => $user->id,
                'address' => 'Address ' . $user->id,
                'phone_number' => '123456789' . $user->id,
            ]);
        }
    }
}
