<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung; 
use App\Models\Transaksi; 
use App\Models\Karyawan; 
use App\Models\Detail; 
use App\Models\Kamar; 

class PengunjungController extends Controller
{
    public function index() {
        $pengunjung = Pengunjung::all();
        $transaksi = Transaksi::all();
        $karyawan = Karyawan::all();
        $detail = Detail::all();
        $kamar = Kamar::all();
        return view ('hotel.index' , compact('pengunjung','transaksi','karyawan','detail','kamar'));
    }
}
