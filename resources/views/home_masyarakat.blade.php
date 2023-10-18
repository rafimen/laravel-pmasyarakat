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
<h1>{{$textjudul}}</h1>
<br>

<br>
 
      <div class="container">
      <h3 style="text-align: center;">LAPORAN</h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">nik</th>
            <th scope="col">nama</th>
            <th scope="col">username</th>
            <th scope="col">telp</th>
        
          </tr>
        </thead>
        <tbody>
          @foreach($masyarakat as $masyarakat)
          <tr>
          <td>{{$masyarakat->nik}}</td>
          <td>{{$masyarakat->nama}}</td>
          <td>{{$masyarakat->username}}</td>
          <td>{{$masyarakat->telp}}</td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    @endsection
</body>
</html>