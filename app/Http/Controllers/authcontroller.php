<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class authcontroller extends Controller
{
    function register(){
        return view('/login');

    }

    function login(request $request){
      $dataLogin = $request->only("username","password");
      if(Auth::attempt($dataLogin)){
       echo "berhasil";
      }else{
       echo "gagal";
      }
   }
   function logout(){
    Auth::logout();
   }

  }

