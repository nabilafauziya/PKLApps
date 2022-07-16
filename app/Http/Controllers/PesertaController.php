<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index() {
        $peserta = Peserta::all();
        return view ('latihan.index' , compact('peserta'));
    }
}
