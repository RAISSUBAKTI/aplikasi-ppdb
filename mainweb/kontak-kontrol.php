<?php
include('koneksi.php');
$perintah="SELECT * FROM tpdb_form";
$jalankan=mysqli_query($koneksi,$perintah); 
$data=mysqli_fetch_array($jalankan); 
$status="yes"; 
if($data['formaktif']==$status){ 
	include('kontak.php'); 
}else{
	echo "<br/><br/>Form tidak aktif"; 
}

?>