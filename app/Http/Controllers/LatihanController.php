<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function menu () {
        $a = [
            array('beranda' => "Beranda"),
            array('berita' => ['Olahraga'=> [
                'Sepak Bola', 'Bulu Tangkis'
            ],'Politik','Manca Negara']),
            array('tentang' => "Ini tentang"),
        ];
        return view('pages.menu', ['menu' => $a]);
    }
}
