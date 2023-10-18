<?php

//PDO
$koneksi = new PDO("mysql:host=localhost;dbname=pmasyarakat","root","");
$query = $koneksi->query("select * from pengaduan");

$data = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="BS/css/bootstrap.min.css">
</head>
<body>
@extends('layouts.app')
@section('content')

<br>
 
      <div class="container">
      <h3 style="text-align: center;">LAPORAN</h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">nama</th>
            <th scope="col">username</th>
            <th scope="col">telepon</th>
            <th scope="col">level</th>
        
          </tr>
        </thead>
        <tbody>
          @foreach($petugas as $petugas)
          <tr>
          <td>{{$petugas->id_petugas}}</td>
          <td>{{$petugas->nama_petugas}}</td>
          <td>{{$petugas->username}}</td>
          <td>{{$petugas->telp}}</td>
          <td>{{$petugas->level}}</td>
        </tr>
        @endforeach
        </tbody>
      </table>
   
    </div>
    @endsection
</body>
</html>