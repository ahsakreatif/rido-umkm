<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'id' => 1,
            'name' => 'super_admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'id' => 2,
            'name' => 'umkm',
            'guard_name' => 'web'
        ]);

        Role::create([
            'id' => 3,
            'name' => 'user',
            'guard_name' => 'web'
        ]);
    }
}
