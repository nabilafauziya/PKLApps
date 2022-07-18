<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $g = [
            ['no'=>'01','jenis' => 'Standart', 'harga' => '150.000'],
            ['no'=>'02','jenis' => 'Delux', 'harga' => '200.000'],
            ['no'=>'03','jenis' => 'President', 'harga' => '300.000'],
    ];
    DB::table('kamar')->insert($g);
    }
}
