<?php

include('system/conf/koneksi.php');
include('system/conf/sesi.php');
//if(isset($_GET['id']) and $_GET['id']!=""){
$edit=$_GET['del'];
$sql=sprintf("delete from tpdb_kunci where id=%d",$edit);
$del=mysqli_query($koneksi,$sql);
if($del){
echo "<script>alert('Kunci berhasil dihapus!')</script>";			
echo "<script>window.open('index.php?page=lihat-kunci','_self')</script>";
}else{
	echo "Perubahan data gagal=<br/>".mysqli_error();
}
//}

?>

