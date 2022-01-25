<?php
  include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro&family=Prata&family=Source+Serif+Pro:wght@600&display=swap" rel="stylesheet">
    <title>PPDB</title>
</head>
<body>
<div class="allover">
        <div class="reg">
            <h1>PPDB</h1>
        </div>
    <form method="POST" action="proses.php" enctype="multipart/form-data">
        <div class="form">
        <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Nama Siswa</label>
  <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
  <input type="text" name="ttl" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
  <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Warga Negara</label>
  <input type="text" name="warga" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Alamat</label>
  <input type="text" name="alamat" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Email</label>
  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div id="emailHelp" class="form-text">Email yang diinput tidak akan disebarluaskan.</div>
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Nomor HP</label>
  <input type="text" name="nohp" class="form-control" id="exampleInputPassword1">
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Asal SMP</label>
    <input type="text" name="asal" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Ayah</label>
    <input type="text" name="ayah" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Ibu</label>
    <input type="text" name="ibu" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Penghasilan</label>
    <input type="text" name="penghasilan" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Pas Foto</label>
    <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
  </div>
<div class="mb-3 form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
  <label class="form-check-label" for="exampleCheck1">Cek ulang?</label>
</div>
<button type="submit" class="btn btn-primary">DAFTAR!</button>
</div>
    </form>
    </div>
</body>
</html>