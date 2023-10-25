<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengaduancontroller;
use App\Http\Controllers\masyarakatcontroller;
use App\Http\Controllers\petugascontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\authpetugascontroller;

Route::middleware(['cek'])->group(function (){
    Route::get('/home', [pengaduancontroller::class,'index']);
    Route::get('/laporan', [pengaduancontroller::class,'laporan']);
    Route::POST('/laporan', [pengaduancontroller::class,'proses_pengaduan']);
});

Route::get('/hapus/{id}', [pengaduancontroller::class,'hapus']);
Route::get('/update/{id}', [pengaduancontroller::class,'update']);
Route::post('/update/{id}', [pengaduancontroller::class,'proses_update']);

Route::get('/home_masyarakat', [masyarakatcontroller::class,'index']);
Route::get('/login', [masyarakatcontroller::class,'login'])->name('login');
Route::POST('/login', [masyarakatcontroller::class,'proses_masyarakat']);


//Route::get('/tambah_petugas', [petugascontroller::class,'tambah_petugas']);
//Route::POST('/proses_petugas', [petugascontroller::class,'proses_petugas']);

Route::get('/register', [authcontroller::class,'register']);
Route::POST('/register', [authcontroller::class,'login']);

Route::middleware(['cekpetugas'])->group(function (){
Route::get('/home_petugas', [petugascontroller::class,'tampil']);
});
Route::get('/proses_petugas', [authpetugascontroller::class,'login_petugas']);
Route::POST('/proses_petugas', [authpetugascontroller::class,'proses_petugas']);





