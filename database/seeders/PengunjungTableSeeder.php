<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PengunjungTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = [
            ['id'=>'01','nama' => 'Lusi', 'alamat' => 'Bandung', 'jk' => 'P','tlp' => '087346329', 'ktp' => '32123467246'],
            ['id'=>'02','nama' => 'Rafel', 'alamat' => 'Rancamanyar', 'jk' => 'L' ,'tlp' => '09347687642' , 'ktp' => '32483979827'],
            ['id'=>'03','nama' => 'Yohana', 'alamat' => 'Bojong', 'jk' => 'P' ,'tlp' => '0834687672' , 'ktp' => '3232743649'],
    ];
    DB::table('pengunjung')->insert($d);
    }
}
