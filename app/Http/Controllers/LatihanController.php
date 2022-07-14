<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function menu () {
        // $a = [
        //     array('beranda' => "Beranda" ,
        //         'berita' => "Berita",
        //         'Berita' => ['Politik','Manca Negara'],
        //         'Olahraga' => "Olahraga",
        //         'olahraga' => ['Sepak Bola', 'Bulu Tangkis'],
        //         'tentang' => "Tentang"),
        // ];
        // return view('pages.menu', ['menu' => $a]);

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
                array('name' => 'Yusuf Bachtiar',
                    'mahasiswa' => ['Muhammad Soleh','Mamat Alkatiri','Ubay Holin','Fadillah'],
                    'nilai' => [78, 85, 90, 87, 95]),
                array('name' => 'Yaris Riyadi Yusuf',
                    'mahasiswa' => ['Alfred McTomminay','Bruno Kasmir','Akid Hendra','Dany Irawan','Chandra Mega Putra'],
                    'nilai' => [67, 90, 50, 70, 60] ),
            ];
            return view('pages.dosen', ['dosen' => $b]);
        }

    // public function dosen() {
    //     $b = [
    //         [
    //             'name' => 'Yusuf Bachtiar',
    //             'name' => 'Yaris Riyadi Yusuf',
                // 'mahasiswa' => [
                //     ["name" => "Muhammad Soleh", "nilai" => 78],
                //     ["name" => "Jujun Junaedi","nilai" => 85],
                //     ["name" => "Mamat Alkatiri", "nilai" => 90],
                //     ["name" => "Ubay Holin","nilai" => 85],
                //     ["name" => "Fadhillah","nilai" => 95],
                // ],
    //         ]
    //     ];
    //     return view('pages.dosen', ['dosen' => $b]);
    // }
}