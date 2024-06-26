<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        // ダミーデータを100個作成
        Event::factory(300)->create();

        $this->call([
            UserSeeder::class,
            ReservationSeeder::class,
        ]);
    }
}

