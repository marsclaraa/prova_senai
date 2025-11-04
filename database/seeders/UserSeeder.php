<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public $user;

    public function run(): void
    {
        User::create([
            'nome'=> 'User',
            'email' => 'user@gmail.com',
            'password'=> Hash::make('123456'),
        ]);

        User::create([
            'nome'=> 'User',
            'email' => 'user2@gmail.com',
            'password'=> Hash::make('123456'),
        ]);

        User::create([
            'nome'=> 'User',
            'email' => 'user3@gmail.com',
            'password'=> Hash::make('123456'),
        ]);
    }
}
