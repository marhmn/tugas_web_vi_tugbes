<a href="Logout.php"><button type="button">Log Out</button></a>
<h1 align="center">BLOGSPOT ARTIKEL</h1>
<hr>
<?php
include 'Koneksi.php';
//buka session
session_start();
//cek LOGIN
if (!isset($_SESSION['id'])) {
  //belum login arahkan ke login.php
  header('location:Form_Akun.php');
}
?>
