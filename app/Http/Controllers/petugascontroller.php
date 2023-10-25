<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class petugascontroller extends Controller
{
    function tampil(){
        $petugas = DB::table('petugas')->get();
        return view ('home_petugas',['petugas' => $petugas]);
    }

    function tambah_petugas(){
        return view('tambah_petugas');
    }

    function proses_petugas(request $request){
        $isi_id = $request->id;
        $isi_nama = $request->nama;
        $isi_username = $request->username;
        $isi_password = $request->password;
        $isi_telp = $request->telp;
        $isi_level = $request->level;

        DB::table('petugas')->insert([
            'id' => $isi_id,
            'nama_petugas' =>$isi_nama,
            'username' =>$isi_username,
            'password' =>hash::make($isi_password),
            'telp' =>$isi_telp,
            'level' =>"petugas"

        ]);
        return redirect('/home_petugas');

    }
}

