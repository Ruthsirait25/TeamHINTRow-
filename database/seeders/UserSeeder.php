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
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        $admin->assignRole('admin');

        $dokter = User::create([
            'name' => 'dokter',
            'email' => 'dokter@gmail.com',
            'password' => bcrypt('dokter')
        ]);

        $dokter->assignRole('dokter');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user')
        ]);

        $user->assignRole('user');
    }
}
