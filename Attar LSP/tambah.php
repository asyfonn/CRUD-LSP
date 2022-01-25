<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Database Tambah</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Produk</h1>
      <center>
      <form method="POST" action="proses.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Siswa</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>Tempat lahir</label>
         <input type="text" name="ttl" />
        </div>
        <div>
          <label>Tanggal Lahir</label>
         <input type="date" name="tanggal" required="" />
        </div>
        <div>
          <label>Warga Negara</label>
         <input type="text" name="warga" required="" />
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" required="" />
        </div>
        <div>
          <label>Email</label>
         <input type="text" name="email" required="" />
        </div>
        <div>
          <label>No Hp</label>
         <input type="text" name="nohp" required="" />
        </div>
        <div>
          <label>Asal SMP</label>
         <input type="text" name="asal" required="" />
        </div>
        <div>
          <label>Nama Ayah</label>
         <input type="text" name="ayah" required="" />
        </div>
        <div>
          <label>Nama Ibu</label>
         <input type="text" name="ibu" required="" />
        </div>
        <div>
          <label>Penghasilan</label>
         <input type="text" name="penghasilan" required="" />
        </div>
        <div>
          <label>Pas Foto</label>
         <input type="file" name="foto" required="" />
        </div>
        <div>
         <button type="submit">Simpan Produk</button>
        </div>
        </section>
      </form>
  </body>
</html>