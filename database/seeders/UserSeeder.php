<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            [
                'name' => 'test2',
                'email' => 'test@test.com',
                'password' => Hash::make('XXXXXXXX'),
                'created_at' => Now(),
                'updated_at' => Now()
            ],
            [
                'name' => 'test',
                'email' => 'ryu.mu.ply@icloud.com',
                'password' => Hash::make('XXXXXXXX'),
                'created_at' => Now(),
                'updated_at' => Now()
            ]
        ]);
    }
}
