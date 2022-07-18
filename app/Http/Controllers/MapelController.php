<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

class MapelController extends Controller
{
    public function index() {
        $mapel = Mapel::all();
        return view ('mapel.index' , compact('mapel'));
    }
}
