<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id               = $_GET['id'];
  $nama             = $_POST['nama'];
  $tempat           = $_POST['ttl'];
  $tanggal          = $_POST['tanggal'];
  $warga            = $_POST['warga'];
  $alamat           = $_POST['alamat'];
  $email            = $_POST['email'];
  $nohp             = $_POST['nohp'];
  $asalsmp          = $_POST['asal'];
  $ayah             = $_POST['ayah'];
  $ibu              = $_POST['ibu'];
  $penghasilan      = $_POST['penghasilan'];
  $foto             = $_FILES['foto']['name'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  if($foto != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'foto/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                    $query  = "UPDATE data SET nama = '$nama', ttl = '$tempat', tanggal = '$tanggal', warga = '$warga', alamat = '$alamat', email = '$email', nohp = '$nohp', asal = '$asal', ayah = '$ayah', ibu = '$ibu', penghasilan = '$penghasilan', foto = '$nama_gambar_baru'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='database.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='edit.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE data SET nama = '$nama', ttl = '$tempat', tanggal = '$tanggal', warga = '$warga', alamat = '$alamat', email = '$email', nohp = '$nohp', asal = '$asal', ayah = '$ayah', ibu = '$ibu', penghasilan = '$penghasilan'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='database.php';</script>";
      }
    }