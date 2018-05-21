<?php
  include 'Koneksi.php';
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM akun where username='".$username."'";
  $hasil = mysqli_query($koneksi,$query);

  if ($akun = mysqli_fetch_assoc($hasil)) {
    $password_db = $akun['password'];
    $hash_md5 = md5($password);
    $cek_bycrypt = password_verify($hash_md5,$password_db);
    if ($cek_bycrypt) {
      session_start();
      $_SESSION['id'] = $akun['id'];
      $_SESSION['username'] = $akun['username'];
      header('location:index.php');
    } else {
      echo "password anda salah<br>";
      echo '<a href="Form_Akun.php">Kembali</a>';
    }
  } else {
    echo "Username tidak ditemukan<br>";
    echo '<a href="Form_Akun.php">Kembali</a>';
  }
