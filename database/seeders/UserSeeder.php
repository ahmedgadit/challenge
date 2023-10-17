<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create([

            'name' => 'Admin',

            'email' => 'admin@gmail.com',

            'password' => Hash::make('12345678'),

        ]);

        \App\Models\User::factory(1)->create([

            'name' => 'Normal User',

            'email' => 'user@gmail.com',

            'password' => Hash::make('12345678'),

        ]);
    }
}
