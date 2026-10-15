<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'password' => 'password123',
            'phone' => '081234567801',
            'address' => 'Surabaya',
            'birth_date' => '2002-05-12',
            'profile_image' => 'assets/images/profiles/budi.jpg',
        ]);

        User::create([
            'name' => 'Siti Rahma',
            'email' => 'siti@example.com',
            'password' => 'password123',
            'phone' => '081234567802',
            'address' => 'Sidoarjo',
            'birth_date' => '2003-02-18',
            'profile_image' => 'assets/images/profiles/siti.jpg',
        ]);

        User::create([
            'name' => 'Rina Wulandari',
            'email' => 'rina@example.com',
            'password' => 'password123',
            'phone' => '081234567803',
            'address' => 'Gresik',
            'birth_date' => '2002-09-07',
            'profile_image' => 'assets/images/profiles/rina.jpg',
        ]);

        User::create([
            'name' => 'Agus Prasetyo',
            'email' => 'agus@example.com',
            'password' => 'password123',
            'phone' => '081234567804',
            'address' => 'Mojokerto',
            'birth_date' => '2001-11-21',
            'profile_image' => 'assets/images/profiles/agus.jpg',
        ]);

        User::create([
            'name' => 'Dewi Lestari',
            'email' => 'dewi@example.com',
            'password' => 'password123',
            'phone' => '081234567805',
            'address' => 'Surabaya',
            'birth_date' => '2003-07-15',
            'profile_image' => 'assets/images/profiles/dewi.jpg',
        ]);
    }
}
