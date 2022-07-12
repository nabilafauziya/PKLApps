<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', function () {
    echo "<center> <u> <h1>HALO SEMUA</h1> </u> </center><br>";
    echo "<center> <u> <h1>Kami sedang belajar laravel dasar</h1> </u> </center>";
});

// Route basic lanjut ke view
Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});


//Route Parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jeniskelamin}/{kelas}/{hobby}',
    function ($a,$b,$c,$d,$e,$f) {
    return view('pages.biodata' , compact('a','b','c','d','e','f'));
});

//Route Optional Parameter
Route::get('/pesanan/{makanan?}', 
    function ($a= "Pesanan Anda Tidak Ada") {
    return view('pages.pesanan', compact('a'));
});

