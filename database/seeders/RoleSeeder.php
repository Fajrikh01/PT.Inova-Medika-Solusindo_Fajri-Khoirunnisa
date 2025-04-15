<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin1',
                'email' => 'admin1@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin123')
            ],
            [
                'name' => 'Pendaftaran1',
                'email' => 'pendaftaran1@gmail.com',
                'role' => 'petugas_pendaftaran',
                'password' => bcrypt('pendaftaran123')
            ],
            [
                'name' => 'Dokter1',
                'email' => 'dokter1@gmail.com',
                'role' => 'dokter',
                'password' => bcrypt('dokter123')
            ],
            [
                'name' => 'Kasir1',
                'email' => 'kasir1@gmail.com',
                'role' => 'kasir',
                'password' => bcrypt('kasir123')
            ],
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
