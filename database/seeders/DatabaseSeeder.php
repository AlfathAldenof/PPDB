<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Random;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@ppdb.ac.id',
            'password' => Hash::make('admin_ppdb'),
            'role' => 'Admin',
        ]);
        
        DB::table('users')->insert([
            'name' => 'Siswa',
            'email' => 'siswa@ppdb.ac.id',
            'password' => Hash::make('siswa_ppdb'),
            'role' => 'User',
        ]);
    }
}
