<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\SlotController;





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
Route::get('/pesanan/{makanan?}/{makanan2}', 
    function ($a= "Pesanan Anda Tidak Ada", $b= "Pesanan Anda Tidak Ada") {
    return view('pages.pesanan', compact('a','b'));
});


//Passing data dari controller ke view
Route::get('/pengenalan', [App\Http\Controllers\PengenalanController::class,'pengenalan']);

//Passing data dinamis (route parameter) dari controller ke view
Route::get('/intro/{nama}/{alamat}/{umur}', [App\Http\Controllers\PengenalanController::class,'intro']);

Route::get('/siswa', [PengenalanController::class,'siswa']);
Route::get('/menu', [LatihanController::class,'menu']);
Route::get('/dosen',[LatihanController::class,'dosen']);
Route::get('/tv', [LatihanController::class, 'tv']);
Route::get('/post' ,[PostController::class,'index']);

Route::get('/latihan' ,[SiswaController::class,'index']);
Route::get('/peserta' ,[PesertaController::class,'index']);
Route::get('/mapel' , [MapelController::class,'index']);

Route::get('/hotel' , [PengunjungController::class,'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::resource('slot', SlotController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


