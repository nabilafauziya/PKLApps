<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $h = [
            ['id'=>'01','noT' => '0011', 'noK' => '134'],
            ['id'=>'02','noT' => '0012', 'noK' => '125'],
            ['id'=>'03','noT' => '0013','noK' => '225'],
    ];
    DB::table('detail')->insert($h);
    }
}
