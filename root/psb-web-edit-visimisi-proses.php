
<?php
include('system/conf/sesi.php');
include('system/conf/koneksi.php');

$id=$_POST['id'];
$visimisi=mysqli_escape_string($koneksi, $_POST['visimisi']);
//Validasi, jika kosong tidak akan diproses
if(empty($id)){
?><script language="JavaScript">alert('Id kosong !');
document.location=('index.php?page=visi-misi')</script>
<?php
}
else if(empty($visimisi)){
?><script language="JavaScript">alert('Nama siswa Masih Kosong !');
document.location=('index.php?page=visi-misi')</script>
<?php
}

else{
	
$sql_ubah="UPDATE tpdb_web_visimisi SET visi_misi='$visimisi' WHERE id='$id'";
			
mysqli_query($koneksi,$sql_ubah)or die ("Perubahan data gagal".mysqli_error());?>
<script language="JavaScript">alert('Data Berhasil diubah !');
document.location=('index.php?page=visi-misi')</script>
<?php
	
		exit;
}
?>