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
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password123'),
                'role' => 1,
            ],
            [
                'name' => 'common',
                'email' => 'common@common.com',
                'password' => Hash::make('password123'),
                'role' => 1,
            ],

        ]);
    }
}
