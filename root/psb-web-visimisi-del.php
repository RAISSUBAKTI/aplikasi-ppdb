<?php

include('system/conf/koneksi.php');
include('system/conf/sesi.php');
//if(isset($_GET['id']) and $_GET['id']!=""){
$edit=$_GET['hapus'];
$sql=sprintf("delete from tpdb_web_visimisi where id=%d",$edit);
$hapus=mysqli_query($koneksi,$sql);
if($hapus){
echo "<script>alert('Berhasil dihapus!')</script>";			
echo "<script>window.open('index.php?page=visi-misi','_self')</script>";
}else{
	echo "Perubahan data gagal=<br/>".mysqli_error();
}
//}

?>

