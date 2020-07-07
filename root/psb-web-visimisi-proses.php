<?php
include('system/conf/sesi.php');
include('system/conf/koneksi.php');
if(isset($_POST['visimisi'])=="") {
	echo '<script language="javascript">alert("Masukan Kunci"); document.location="index.php?page=visi-misi";</script>';
	}

$perintah=sprintf("INSERT INTO tpdb_web_visimisi VALUES('null','%s')",$_POST['visimisi']);
$query=mysqli_query($koneksi,$perintah);
if(!$query){
echo "gagal<br>";
echo "Eroor:".mysqli_error();	
}else{
echo '<script language="javascript">alert("Berhasil Disimpan"); document.location="index.php?page=visi-misi";</script>';
	}

?>