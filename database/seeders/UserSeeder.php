<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::create([


            'name' => 'azhar utama',
            'username' => 'azharutama',
            'email' => 'azharutama837@gmail.com',
            'password' => bcrypt('password')

        ]);

        User::factory(5)->create();
    }
}
