<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'developer',
            'name' => 'Developer',
            'password' => bcrypt('secret'),
            'level' => 'Admin'
        ]);

        User::create([
            'username' => 'staff',
            'name' => 'Staff',
            'password' => bcrypt('secret'),
            'level' => 'Staff'
        ]);
    }
}
