<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
        //
        User::truncate();
        User::insert([
            [
                'name' => 'Admin Aplikasi',
                'level' => 'admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('12345'),
                'remember_token' => Str::random('20')
            ],
            [
                'name' => 'User Aplikasi',
                'level' => 'pengguna',
                'email' => 'user@mail.com',
                'password' => bcrypt('12345'),
                'remember_token' => Str::random('20')
            ],
        ]);
    }
}
