<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PostTableSeeder::class,
            SiswaTableSeeder::class,
            PesertaTableSeeder::class,
            MapelTableSeeder::class,
            PengunjungTableSeeder::class,
            TransaksiTableSeeder::class,
            KaryawanTableSeeder::class,
            DetailTableSeeder::class,
            KamarTableSeeder::class,
        ]
        );
    }
}
