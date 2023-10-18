<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
        $isi_id = $request->id_petugas;
        $isi_nama = $request->nama;
        $isi_username = $request->username;
        $isi_password = $request->password;
        $isi_telp = $request->telp;
        $isi_level = $request->level;

        DB::table('petugas')->insert([
            'id_petugas' => $isi_id,
            'nama_petugas' =>$isi_nama,
            'username' =>$isi_username,
            'password' =>$isi_password,
            'telp' =>$isi_telp,
            'level' =>"petugas"

        ]);
        return redirect('/home_petugas');

    }
}

