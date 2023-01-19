<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";



$login = mysqli_query($conn, $sql);
$ketemu = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);

if ($ketemu > 0) {
	session_start();
	$_SESSION['username'] = $data['username'];
	$_SESSION['password'] = $data['password'];
	$_SESSION['nama_admin'] = $data['nama_admin'];
	$nama = $_SESSION['nama_admin'];

	echo "<script>alert('Berhasil Login, Selamat Datang $nama');window.location='admin.php';</script>";
} else {
	echo "<script>alert('Login gagal! username atau password tidak benar');window.location='index.php';</script>";
}
mysqli_close($conn);
