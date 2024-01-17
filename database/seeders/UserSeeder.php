<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin', 
            'email' => 'kiran@infotechsolz.com',
            'phone' => '7602000895',
            'username' => 'admin',
            'password' => 'Admin@123',
            'user_role_id' => 1,
        ]);
    }
}
