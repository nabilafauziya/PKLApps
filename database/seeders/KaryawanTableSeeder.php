<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $f = [
            ['id'=>'01','nama' => 'Lusi', 'jk' => 'P'],
            ['id'=>'02','nama' => 'Rafel', 'jk' => 'L'],
            ['id'=>'03','nama' => 'Yohana', 'jk' => 'P'],
    ];
    DB::table('karyawan')->insert($f);
    }
}
