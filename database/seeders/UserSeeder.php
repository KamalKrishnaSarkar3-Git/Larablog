<?php

namespace Database\Seeders;

use App\Models\User;
use App\UserStatus;
use App\UserType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@example.com',
            'username'=>'admin',
            'password'=>Hash::make('12345'),
            'type'=>UserType::SuperAdmin,
            'status'=>UserStatus::Active,
        ]);
    }
}
