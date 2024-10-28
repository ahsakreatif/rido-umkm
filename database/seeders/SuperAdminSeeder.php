<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role_id' => 1, // super_admin role
            'nik' => '1234567890123456', // contoh NIK
            'phone' => '081234567890', // contoh nomor telepon
        ]);
    }
}