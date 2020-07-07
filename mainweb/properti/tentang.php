<?php
$perintah="SELECT * FROM tpdb_web_tentang";
$query=mysqli_query($koneksi,$perintah)or die 
("Gagal melakukan koneksi".mysqli_error());
$ten=mysqli_fetch_array($query);
$id=$ten['id'];
$judul=$ten['judul'];
$tentang=$ten['tentang'];
?>