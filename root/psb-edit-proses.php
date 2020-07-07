
<?php
include('system/conf/sesi.php');
include('system/conf/koneksi.php');

$id=$_POST['id'];
$namasiswa=$_POST['nama_siswa'];
$tempatlahir=$_POST['tempat_lahir'];
$tanggallahir=$_POST['tanggal_lahir'];
$jeniskelamin=$_POST['jenis_kelamin'];
$sekolah=$_POST['sekolah'];
$nisn=$_POST['nisn'];
$orangtua=$_POST['orang_tua'];
$alamat=$_POST['alamat'];
$alamat2=$_POST['rt'];
$alamat3=$_POST['rw'];
$alamat4=$_POST['desa'];
$alamat5=$_POST['kecamatan'];
$kota=$_POST['kota'];
$provinsi=$_POST['provinsi'];
$notlp=$_POST['no_tlp'];
$statussiswa=$_POST['status_siswa'];


//Validasi, jika kosong tidak akan diproses
if(empty($id)){
?><script language="JavaScript">alert('Id kosong !');
document.location=('index.php?page=lihat')</script>
<?php
}
else if(empty($namasiswa)){
?><script language="JavaScript">alert('Nama siswa Masih Kosong !');
document.location=('index.php?page=lihat')</script>
<?php
}
elseif(empty($tempatlahir)){
?><script language="JavaScript">alert('Tempat lahir siswa masih kosong !');
document.location=('index.php?page=lihat')</script>
<?php
}
elseif (empty($tanggallahir)) {
?><script language="JavaScript">alert('Tanggal lahir siswa kososng!');
document.location=('index.php?page=lihat')</script>
<?php
}
elseif(empty($jeniskelamin)){
?><script language="JavaScript">alert('Jenis Kelamin masih kosong !');
document.location=('index.php?page=lihat')</script>
<?php
}
elseif (empty($sekolah)) {
?><script language="JavaScript">alert('Sekolah masih kosong !');
document.location=('index.php?page=lihat')</script>
<?php
}
elseif(empty($nisn)){
?><script language="JavaSCript">alert('NISN masih kosong !');
document.location=('index.php?page=lihat')</script>
<?php
}
elseif(empty($orangtua)){
?><script language="JavaScript">alert('Nisn Masih Kosong !');
document.location('index.php?page=lihat')</script>
<?php 
}
elseif(empty($alamat)){
?><script language="JavaScript">alert('Alamat masih kososng !');
document.location('index.php?page=lihat')</script>
<?php
}
elseif(empty($alamat2)){
?><script language="JavaScript">alert('Alamat masih kososng !');
document.location('index.php?page=lihat')</script>
<?php
}
elseif(empty($alamat3)){
?><script language="JavaScript">alert('Alamat masih kososng !');
document.location('index.php?page=lihat')</script>
<?php
}
elseif(empty($alamat4)){
?><script language="JavaScript">alert('Alamat masih kososng !');
document.location('index.php?page=lihat')</script>
<?php
}
elseif(empty($alamat5)){
?><script language="JavaScript">alert('Alamat masih kososng !');
document.location('index.php?page=lihat')</script>
<?php
}
elseif (empty($kota)) {
?><script language="JavaScript">alert('Kota masih kosong !');
document.location('index.php?page=lihat')</script>
<?php
}
elseif(empty($provinsi)){
?><script language="JavaScript">alert('Provinsi masih kosong !');
document.location('index.php?page=lihat')</script>
<?php
}
elseif(empty($notlp)){
?><script language="JavaScript">alert('No telpon masih masih kosong !');
document.location('index.php?page=lihat')</script>
<?php
}
elseif(empty($statussiswa)){
?><script language="JavaScript">alert('Status Siswa kosong !');
document.location('index.php?page=lihat')</script>
<?php
}
else{
	//Bila semuanya telah di cek maka lanjutkan update
	$sql_ubah="UPDATE tpdb_daftar SET
				nama_siswa='$namasiswa',
				tempat_lahir='$tempatlahir',
				tanggal_lahir='$tanggallahir',
				jenis_kelamin='$jeniskelamin',
				sekolah='$sekolah',
				nisn='$nisn',
				orang_tua='$orangtua',
				alamat='$alamat',
				rt='$alamat2',
				rw='$alamat3',
				desa='$alamat4',
				kecamatan='$alamat5',
				kota='$kota',
				provinsi='$provinsi',
				no_tlp='$notlp',
				status_siswa='$statussiswa'
				

												
			WHERE id='$id'";
			
mysqli_query($koneksi,$sql_ubah)or die ("Perubahan data gagal".mysqli_error());?>
<script language="JavaScript">alert('Data Berhasil diubah !');
document.location=('index.php?page=verifikasi')</script>
<?php
	
		exit;
}
?>