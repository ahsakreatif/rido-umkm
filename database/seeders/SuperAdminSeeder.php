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
            'email' => 'admin@sobatkaribrido.com',
            'password' => Hash::make('ahsa123'),
            'nik' => '1234567890123456', // contoh NIK
            'phone' => '081234567890', // contoh nomor telepon
            'email_verified_at' => now(),
        ]);

        $user = User::where('email', 'admin@sobatkaribrido.com')->first();
        $user->assignRole('super_admin');
    }
}
