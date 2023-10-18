<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{asset("BS/css/bootstrap.min.css")}}>
</head>
<body>
    <div class="container">
<div class="mb-3">
    <form action={{url("update/$pengaduan->id_pengaduan")}} method="POST">
        @method("POST")
        @csrf
  <label for="exampleFormControlTextarea1" class="form-label">update</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan">{{$pengaduan->isi_laporan}}</textarea>
</div>
<button type="submit">update</button>
</form>

</div>
</body>
</html>