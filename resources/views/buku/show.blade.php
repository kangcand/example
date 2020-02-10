<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <fieldset>
      <legend>Show Buku </legend>
      Judul : <b>{{$buku->judul}}</b><br>
      Jumlah Halaman : <b>{{$buku->jml_halaman}}</b><br>
      Penerbit : <b>{{$buku->penerbit}}</b><br>
      Status : <b>{{ $buku->status }}</b><br>
      Sinopsis : <b>{{$buku->sinopsis}}</b>
   </fieldset>
</body>
</html>
