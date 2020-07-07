
<?php
include('system/conf/koneksi.php');
include('system/conf/sesi.php'); 
?>
<?php
$hm=true;
if(isset($_POST['id'])=="") {
	echo"Data untuk id masih kosong";
$hm=false;
}
$pr=true;
if(isset($_POST['judul'])==""){
	echo "Data Judul belum kosong";
$pr=false;
}
$vs=true;
if(isset($_POST['tentang'])=="") {
echo "Deskripsi sekolah Anda belum diisi";
}
$cek=($hm&&$pr&&$vs)?true:false;
if($cek==true){
$id=$_POST['id'];
$judul=$_POST['judul'];
$tentang=$_POST['tentang'];
$jalankan="UPDATE tpdb_web_tentang SET
	judul='$judul',
	tentang='$tentang'
	WHERE id='$id'";

$kon=mysqli_query($koneksi,$jalankan);
if(!$kon) {
echo "Data gagal disimpan<br/>";
echo "ERROR:".mysqli_error();
}else{					
	echo "<script>alert('Data berhasil disimpan!')</script>";			
	echo "<script>window.open('index.php?page=tentang-sekolah','_self')</script>";
}
}

?>