<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengenalanController extends Controller
{
    public function pengenalan(){
        $nama = "Nabila Fauziya";
        $umur = "17";
        return view('pages.pengenalan', compact('nama','umur'));
    }

    public function intro($nama,$alamat,$umur){
        return view('pages.intro', compact('nama','alamat','umur'));
    }

    public function siswa(){

        $a = [
            array ('id' => 1, 'name' => "Andiny", 'age' => 17, 'mapel' =>
                ['Matematika', 'B.Indonesia']),
            array ('id' => 2, 'name' => "Nazala", 'age' => 16, 'mapel' =>
                ['B.Sunda', 'Fisika']),
            array ('id' => 3, 'name' => "Nabila Fauziya", 'age' => 17, 'mapel' =>
                ['Matematika', 'Fisika']),
        ];
        // add($a);
        return view('pages.siswa', ['siswa' => $a]);
    }
}
