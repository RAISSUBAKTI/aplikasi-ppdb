<?php
//this code created by blues
//if you have any question
//contact me : rais_subakti@yahoo.com
session_start();
include('system/conf/koneksi.php');

if(isset($_POST['login'])){

	//Mencegah SQL Injection, buat variabel dulu
$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,md5($_POST['password']));

//Buat variabel untuk Query
$sql = mysqli_query($koneksi,"SELECT * FROM tpdb_user WHERE username='$username' AND password='$password'") or die(mysqli_error());
	if(mysqli_num_rows($sql) == 0){
//jika salah
echo '<script language="javascript">alert("Username  tidak ditemukan!"); document.location="psb-login.php?page=masuk";</script>';
	}else{
//jika benar
$row = mysqli_fetch_assoc($sql);
if($row['level'] == 1){ //tabel level jika login dengan level 1 buat session admin
$_SESSION['admin']=$user;
echo '<script language="javascript">alert("Berhasil login"); document.location="index.php?page=beranda";</script>';
		}
	}
}

?>

