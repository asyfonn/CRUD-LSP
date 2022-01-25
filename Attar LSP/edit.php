<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM data WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='database.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='database.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Produk dengan gambar - Gilacoding</title>
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
        <h1>Edit Produk <?php echo $data['nama']; ?></h1>
      <center>
      <form method="POST" action="prosesedit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Nama Siswa</label>
          <input type="text" name="nama" value="<?php echo $data['nama']; ?>"/>
        </div>
        <div>
          <label>Tempat lahir</label>
         <input type="text" name="ttl" required="" value="<?php echo $data['ttl']; ?>"/>
        </div>
        <div>
          <label>Tanggal Lahir</label>
         <input type="date" name="tanggal" required="" value="<?php echo $data['tanggal']; ?>" />
        </div>
        <div>
          <label>Warga Negara</label>
         <input type="text" name="warga" required="" value="<?php echo $data['warga']; ?>"/>
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" required="" value="<?php echo $data['alamat']; ?>"/>
        </div>
        <div>
          <label>Email</label>
         <input type="text" name="email" required="" value="<?php echo $data['email']; ?>"/>
        </div>
        <div>
          <label>No Hp</label>
         <input type="text" name="nohp" required="" value="<?php echo $data['nohp']; ?>"/>
        </div>
        <div>
          <label>Asal SMP</label>
         <input type="text" name="asal" required="" value="<?php echo $data['asal']; ?>"/>
        </div>
        <div>
          <label>Nama Ayah</label>
         <input type="text" name="ayah" required="" value="<?php echo $data['ayah']; ?>"/>
        </div>
        <div>
          <label>Nama Ibu</label>
         <input type="text" name="ibu" required="" value="<?php echo $data['ibu']; ?>"/>
        </div>
        <div>
          <label>Penghasilan</label>
         <input type="text" name="penghasilan" required="" value="<?php echo $data['penghasilan']; ?>"/>
        </div>
        <div>
          <label>Gambar Produk</label>
          <img src="foto/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="foto" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>