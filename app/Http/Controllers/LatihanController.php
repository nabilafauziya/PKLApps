<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function menu () {

        $post = [
            [
            "beranda" => "Beranda",
            "berita" => "Berita",
            "kategori" => [
                [
                    "name" => "Olahraga",
                    "data" => ["Sepak Bola", "Bulu Tangkis"]
                ],
                [
                    "name" => "Politik",
                    "data" => []
                ],
                [
                    "name" => "Manca Negara",
                    "data" => []
                ]
                ],
                "tentang" => "Tentang"
            ]
        ];
        return view('pages.menu', ['post' => $post]);
    }

    public function dosen() {
        $b = [
            [
                'dosen' => 'Yusuf Bachtiar',
                'kuliah' => 'Pemrograman Mobile',
                'mahasiswa' => [
                    ["name" => "Muhammad Soleh", "nilai" => 78],
                    ["name" => "Jujun Junaedi","nilai" => 85],
                    ["name" => "Mamat Alkatiri", "nilai" => 90],
                    ["name" => "Ubay Holin","nilai" => 87],
                    ["name" => "Fadhillah","nilai" => 95],
                ],
                'pengajar' => 'Yaris Riyadi Yusuf',
                'matkul' => 'Pemrograman Web',
                'siswa' => [
                    ["nama" => "Alfred McTomminay", "nilai" => 67],
                    ["nama" => "Bruno Kasmir","nilai" => 90],
                    ["nama" => "Akid Hendra", "nilai" => 50],
                    ["nama" => "Dany Irawan","nilai" => 70],
                    ["nama" => "Chandra Mega Putra","nilai" => 60],
                ],
            ]
        ];
        return view('pages.dosen', ['dosen' => $b]);
    }

    public function tv() {
        $c = [
            array('channel' => 'Net TV', 'acara' => 'Comedy Night Live', 'jam' => '00.30 am', 'tanggal' => '14 Juli 2022',),
            array('channel' => 'Beinsports', 'acara' => 'Paris Day 4 Match 1', 'jam' => '18.58 pm', 'tanggal' => '14 Juli 2022',),
            array('channel' => 'Indosiar', 'acara' => 'True Legend', 'jam' => '00.00 am', 'tanggal' => '15 Juli 2022',),
            array('channel' => 'Ochannel', 'acara' => 'Jakarta Food Delights', 'jam' => '11.00 am', 'tanggal' => '14 Juli 2022',),
            array('channel' => 'TVRI', 'acara' => 'Pesona Indonesia', 'jam' => '17.00 pm', 'tanggal' => '14 Juli 2022',),
        ];
        return view('pages.tv', ['tv' => $c]);
    }

    
}