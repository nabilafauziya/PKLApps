<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MapelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = [
            ['kode'=>'MP01','nama' => 'ALGORITMA', 'sks' => '2', 'semester' => '1'],
            ['kode'=>'MP02','nama' => 'BASISDATA', 'sks' => '3', 'semester' => '1'],
            ['kode'=>'MP03','nama' => 'ASSEMBLY', 'sks' => '2', 'semester' => '2'],
    ];
    DB::table('mapel')->insert($c);

    }
}
