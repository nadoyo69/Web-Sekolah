<?php
  include "../../koneksi.php";
  $name = $_POST['NAMA'];
  $nisn = $_POST['NISN'];
  $tmp = $_POST['TEMPAT_LAHIR'];
  $tgl = $_POST['TANGGAL_LAHIR'];
  $jenis = $_POST['JENIS_KELAMIN'];
  $alm = $_POST['ALAMAT'];
  $agm = $_POST['AGAMA'];
  $hp = $_POST['NO_HP'];
  $email = $_POST['EMAIL'];
  $hobby = $_POST['HOBBY'];
  $ayah = $_POST['AYAH'];
  $pen_ayah = $_POST['PENDIDIKAN_AYAH'];
  $pek_ayah = $_POST['PEKERJAAN_AYAH'];
  $alm_ayah = $_POST['ALAMAT_AYAH'];
  $ibu = $_POST['IBU'];
  $pen_ibu = $_POST['PENDIDIKAN_IBU'];
  $pek_ibu = $_POST['PEKERJAAN_IBU'];
  $alm_ibu = $_POST['ALAMAT_IBU'];
  $username = $_POST['USERNAME'];
  $pass = $_POST['PASSWORD'];
  $thn = $_POST['TAHUN_MASUK'];

  $conn = mysqli_connect('localhost','tekom','12345','data_sekolah') or die ("Koneksi gagal");
  $mysqli = "INSERT INTO data_siswa ( nama_siswa, nisn, tempat_lahir, tanggal_lahir, tahun_masuk, jenis_kelamin, alamat, agama, nomor_telp, email, hobby, ayah, pendidikan_ayah, 
  pekerjaan_ayah, alamat_ayah, ibu, pendidikan_ibu, pekerjaan_ibu, alamat_ibu, username, password) VALUES ('$name', '$nisn', '$tmp', '$tgl','$thn', '$jenis', '$alm', '$agm', '$hp',
  '$email', '$hobby','$ayah','$pen_ayah','$pek_ayah','$alm_ayah','$ibu','$pen_ibu','$pek_ibu','$alm_ibu','$username','$pass' )";
  $result = mysqli_query($conn, $mysqli);
  if($result) {
      header('location:datasiswa.php?data_berhasil_ditambah');
  }
  mysqli_close($conn);
?>