<?php
$perintah="SELECT * FROM tpdb_web_head";
$query=mysqli_query($koneksi,$perintah)or die ("Gagal melakukan koneksi".mysqli_error());
$head=mysqli_fetch_array($query);
$deskripsi=$head['deskripsi'];
$foto=$head['foto'];
?>