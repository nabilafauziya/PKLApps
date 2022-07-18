<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class PesertaController extends Controller
{
    public function index() {
        $peserta = Peserta::all();
        return view ('peserta.index' , compact('peserta'));
    }
}
