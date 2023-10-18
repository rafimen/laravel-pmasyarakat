<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class masyarakatcontroller extends Controller
{
    function index(){
    $judul = "";
       $masyarakat = DB::table('masyarakat')->get();
       return view('home_masyarakat',['textjudul' => $judul,'masyarakat' => $masyarakat]);  
    }
    function login(){
        $judul = " ";
        return view('home',['textjudul' => $judul]);
    }

    function proses_masyarakat(request $request){

        $nik = $request ->nik;
        $nama = $request ->nama;
        $username = $request ->username;
        $password = $request ->password;
        $telp = $request ->telp;
    
      $masyarakat = DB::table('masyarakat')->insert([
            'nik' => $nik,
            'nama' => $nama,
            'username' => $username,
            'password' => hash::make($password),
            'telp' => $telp
    
        ]);
        return redirect('/home_masyarakat');
    }
    
}

?>
