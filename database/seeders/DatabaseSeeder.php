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
            'name' => 'Admin_PPDB',
            'email' => 'admin@ppdb.ac.id',
            'password' => Hash::make('admin_ppdb'),
            'role' => 'Admin',
        ]);
        
        DB::table('users')->insert([
            'name' => 'User_Siswa',
            'email' => 'siswa@ppdb.ac.id',
            'password' => Hash::make('siswa_ppdb'),
            'role' => 'User',
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
