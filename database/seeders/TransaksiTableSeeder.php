<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e = [
            ['no'=>'01','pengunjung' => '1001', 'karyawan' => '0123', 'kamar' => '2','masuk' => '22-05-04', 'keluar' => '22-05-05', 'inap' => '1 Hari', 'harga' => '120.000'],
            ['no'=>'02','pengunjung' => '1002', 'karyawan' => '0456', 'kamar' => '1' ,'masuk' => '22-05-14' , 'keluar' => '22-05-16', 'inap' => '2 Hari', 'harga' => '300.000'],
            ['no'=>'03','pengunjung' => '1003', 'karyawan' => '0789', 'kamar' => '1' ,'masuk' => '22-05-24' , 'keluar' => '22-05-28', 'inap' => '2 Hari', 'harga' => '300.000',],
    ];
    DB::table('transaksi')->insert($e);
    }
}
