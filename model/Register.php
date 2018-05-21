<?php
  include 'Koneksi.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $ulangi_password = $_POST['ulangi_password'];
  if ($password == $ulangi_password) {
    $hash_md5 = md5($password);
    $bycrypt = password_hash($hash_md5,PASSWORD_DEFAULT);
    $query = "INSERT INTO akun VALUES(NULL,'".$username."','".$bycrypt."')";
    $input = mysqli_query($koneksi,$query);
    if ($input) {
      header('location:Form_Akun.php');
    } else {
      echo "Terjadi kesalahan saat input<br>";
      echo '<a href="Form_Register.php">Kembali</a>';
    }
  } else {
    echo "Password tidak sama silahkan ulangi<br>";
    echo '<a href="Form_Register.php">Kembali</a>';
  }
 ?>
