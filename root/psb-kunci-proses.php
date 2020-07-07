<?php
include('system/conf/sesi.php');
include('system/conf/koneksi.php');
if($_POST['kunci']=="") {
	echo '<script language="javascript">alert("Masukan Kunci"); document.location="index.php?page=tambah-kunci";</script>';
	}

$level=2;
	$perintah=sprintf("INSERT INTO tpdb_kunci VALUES('null','%s','%s')",
	$level,$_POST['kunci']);
	$query=mysqli_query($koneksi,$perintah);
	if(!$query){
	echo "gagal<br>";
	echo "Eroor:".mysqli_error();	
	}else{
echo '<script language="javascript">alert("Berhasil Disimpan"); document.location="index.php?page=tambah-kunci";</script>';
	}

?>