<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PesertaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $b = [
            ['no'=>'2001','kode' => 'Mp01'],
            ['no'=>'2001','kode' => 'Mp02'],
            ['no'=>'2003','kode' => 'Mp01'],
            ['no'=>'2003','kode' => 'Mp02'],
            ['no'=>'2004','kode' => 'Mp01'],
            ['no'=>'2004','kode' => 'Mp03'],
    ];
    DB::table('peserta')->insert($b);
    }
}
