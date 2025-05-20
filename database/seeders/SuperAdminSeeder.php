<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id = date('YmdHis');

        User::create([
            'id' => $id,
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'nama' => 'Super Admin',
            'password' => Hash::make('superadmin123'),
            'role' => 'superadmin',
            'remember_token' => Str::random(20),
        ]);
    }
}
