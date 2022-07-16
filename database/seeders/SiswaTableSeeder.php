<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
            ['no'=>'2001','nama' => 'Badu', 'jk'=>'L', 'jurusan' => 'TK'],
            ['no'=>'2002','nama' => 'Muliati', 'jk'=>'P', 'jurusan' => 'TE'],
            ['no'=>'2003','nama' => 'Rahmiadi', 'jk'=>'L', 'jurusan' => 'TK'],
            ['no'=>'2004','nama' => 'Nasrul', 'jk'=>'L', 'jurusan' => 'TK'],
    ];
    DB::table('siswa')->insert($a);
    }
}
