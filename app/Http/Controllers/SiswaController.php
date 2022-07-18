<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Peserta;
use App\Models\Mapel;


class SiswaController extends Controller
{
    public function index() {
        $siswa = Siswa::all();
        $peserta = Peserta::all();
        $mapel = Mapel::all();
        return view ('latihan.index' , compact('siswa','peserta','mapel'));
    }
}
