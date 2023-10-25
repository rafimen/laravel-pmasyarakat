<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class authpetugascontroller extends Controller
{
    function login_petugas(){
        return view ('home_petugas');
    }
    function proses_petugas(request $request){
        $datalogin = $request->only ("username","password");
        if(Auth::guard('petugas')->attempt($datalogin)){
            return redirect('home_petugas');
        }else {
           return redirect('login_petugas');
        }
    }
}
