<?php
include('system/conf/koneksi.php');
include('system/conf/sesi.php');
//if(isset($_GET['id']) and $_GET['id']!=""){
$tamu=mysql_escape_string(htmlentities($_GET['tamu']));
$sql=sprintf("delete from tpdb_tamu where id=%d",$tamu);
$del=mysqli_query($koneksi,$sql);
if($del){
echo "<script>alert('pesan berhasil dihapus!')</script>";			
echo "<script>window.open('index.php?page=tamu','_self')</script>";
}else{
	echo "Perubahan data gagal=<br/>".mysqli_error();
}

?>

