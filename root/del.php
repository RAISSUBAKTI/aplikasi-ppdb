<?php

include('system/conf/koneksi.php');
include('system/conf/sesi.php');
//if(isset($_GET['id']) and $_GET['id']!=""){
$edit=$_GET['del'];
$sql=sprintf("delete from tpdb_daftar where id=%d",$edit);
$sql2="SELECT * FROM tpdb_daftar where id='$edit'";
$hpsgbr=mysqli_query($koneksi,$sql2);
$jalankan=mysqli_fetch_array($hpsgbr);
unlink("../ppdb/gambar/$jalankan[foto]");
$del=mysqli_query($koneksi,$sql);
if($del){
echo "<script>alert('Data berhasil dihapus!')</script>";			
echo "<script>window.open('index.php?page=lihat','_self')</script>";
}else{
	echo "Perubahan data gagal=<br/>".mysqli_error();
}
//}

?>

