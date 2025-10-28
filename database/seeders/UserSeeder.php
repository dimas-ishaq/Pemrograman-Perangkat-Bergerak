<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Menghapus data lama (opsional, tapi baik untuk mencegah duplikasi email)
        DB::table('users')->truncate(); 

        // 1. Akun ADMIN
        DB::table('users')->insert([
            'name' => 'Admin Utama',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            // Password: 'password'
            'password' => Hash::make('password'), 
            'role' => 'admin', // Role disetel ke 'admin'
            'is_deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. Akun USER Biasa
        DB::table('users')->insert([
            'name' => 'User Biasa',
            'email' => 'user@example.com',
            'email_verified_at' => now(),
            // Password: 'password'
            'password' => Hash::make('password'), 
            'role' => 'user', // Role disetel ke 'user' (default)
            'is_deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
    }
}
