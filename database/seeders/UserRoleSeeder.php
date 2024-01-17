<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $useradminrole = UserRole::create([
            'name' => 'admin', 
        ]);

        $uservendorrole = UserRole::create([
            'name' => 'vendor', 
        ]);

        $usersupervisorrole = UserRole::create([
            'name' => 'supervisor', 
        ]);
    }
}
