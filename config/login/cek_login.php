<?php
session_start();
require "../koneksi/koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];

$cek_username = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");

if ($data = mysqli_fetch_assoc($cek_username)) {
	$nama = $data["nama"];
	$email = $data["email"];
	$username = $data["username"];
	$role = $data["role"];

	$password = password_verify($password, $data["password"]);
	if ($password) {
		$_SESSION['nama'] = $nama;
		$_SESSION['email'] = $email;
		$_SESSION['username'] = $username;
		$_SESSION['role'] = $role;
		$_SESSION['login'] = "login";
		header("location: ../../pages/index.php");
	} else {
		header("location: ../../index.php?m=unregistered");
	}
} else {
	header("location: ../../index.php?m=fail");
}
