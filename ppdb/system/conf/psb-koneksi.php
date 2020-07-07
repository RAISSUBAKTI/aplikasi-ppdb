<?php
$host="localhost";
$user="root";
$password="";
$db="mtsululalbab";
$koneksi=mysqli_connect($host,$user,$password);
if(!$koneksi){
echo"Gagal Melakukan Koneksi:".mysqli_connect_error();
exit();
}
$pilihdb=mysqli_select_db($koneksi,$db);
if(!$pilihdb){
	exit("Gagal Memilih Database:".mysqli_connect_error());
}


?>
