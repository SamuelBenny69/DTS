<?php

use App\Http\Controllers\CRUDcontroller;
use App\Http\Controllers\CRUDphoto;
use App\Http\Controllers\halloController;
use App\Http\Controllers\PageControllerSatu;
use App\Http\Controllers\pengajarController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello VSGA';
});

Route::get('/word', function () {
    return 'hello Dunia';
});

Route::get('/about', function () {
    return 'NIM ::2231750006';
});

Route::get('/user/{name}', function ($name) {
    return 'NAMA SAYA '.$name;
});

Route::get('/post/{post}/{comment}', function ($post,$comment) {
    return 'post ke- '.$post . "Komentar ke-: " . $comment;
});

Route::get('/user/{name?}', function ($name = null) {
    return 'NAMA SAYA '.$name;
});

Route::get('/kodebarang/{jenis?}/{merek?}', function ($jk='k01',$mrk='nokia') {
    return "kode barang $jk dan nama barang $mrk";
});

// Dalam file routers/web.php
Route::get('/about}', function () {
    return view ('about');
})->name('about');

// Dalam file routers/web.php
Route::get('/tampil}', function () {
    return view ('tampil');
})->name('tampil');

Route::get('/pesandisini', function () {
    return '<h1>pesan disini </h1>';
});
Route::redirect('/contact-us', '/pesandisini');


Route::prefix('/polinema')->group (function () {
    Route::get('/dosen', function () {
        echo "<h1>Daftar dosen </h1>";
    });
    Route::get('/tendik', function () {
        echo "<h1>Daftar tendik </h1>";
    });
    Route::get('jurusan', function () {
        echo "<h1>Daftar jurusan </h1>";
    });
});

Route::prefix('/admin')->group (function () {
    Route::get('/dosen', function () {
        echo "<h1>Daftar dosen </h1>";
    });
    Route::get('/tendik', function () {
        echo "<h1>Daftar tendik </h1>";
    });
    Route::get('jurusan', function () {
        echo "<h1>Daftar jurusan </h1>";
    });
});

Route::fallback(function (){
    return "maaf,alamat ini tidak ditemukan";
});

Route::get('/daftar-dosen', [pengajarController::class,'daftarpengajar']);
Route::get('/table-pengajar', [pengajarController::class,'tabelpengajar']);
Route::get('/blog-pengajar', [pengajarController::class,'blogpengajar']);
Route::get('pasar-buah', [PageControllerSatu::class,'satu']);
Route::resource('crud', CRUDcontroller::class);
Route::resource('photo', CRUDphoto::class)->only([
    'index',
    'show',
]);
Route::resource('photo', CRUDphoto::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);
Route::get('/selamat', function () {
    return view ('hello',['name'=>'dino']);
});

Route::get('greeting',[ WelcomeController::class,'greeting']);
Route::get('heloow',[ halloController::class,'greeting']);
