<?php
include('system/conf/koneksi.php');
include('system/conf/sesi.php');
$a=true;
if($_POST['nama_siswa']==""){
echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
echo "<script>window.open('index.php?page=tambah','_self')</script>";
$a=false;
}
$b=true;
if($_POST['tempat_lahir']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
	$b=false;
}
$c=true;
if($_POST['tanggal_lahir']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
$c=false;
}
$d=true;
if($_POST['jenis_kelamin']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
$d=false;
}
$e=true;
if($_POST['sekolah']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
$e=false;
}
$f=true;
if($_POST['nisn']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
$f=flase;
}
$g=true;
if($_POST['orang_tua']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
$g=false;
}
$h=true;
if($_POST['alamat']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
$h=false;
}
$h2=true;
if($_POST['rt']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
$h2=false;
}
$h3=true;
if($_POST['rw']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
$h3=false;
}
$h4=true;
if($_POST['desa']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
$h4=false;
}
$h5=true;
if($_POST['kecamatan']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
$h5=false;
}
$i=true;
if($_POST['kota']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
$i=false;
}
$j=true;
if($_POST['provinsi']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
$j=false;
}
$j2=true;
if($_POST['status_siswa']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
$j2=false;
}
$k=true;
if($_POST['no_tlp']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
$k=false;
}
					
$cek=($a&&$b&&$c&&$d&&$e&&$f&&$g&&$h&&$h2&&$h3&&$h4&&$h5&&$i&&$j&&$j2&&$k)?true:false;

if($cek==true){//cek lagi apakan semua sudah diisi


$imgFile = $_FILES['foto']['name'];
$tmp_dir = $_FILES['foto']['tmp_name'];
$imgSize = $_FILES['foto']['size'];

$upload_dir = '../ppdb/gambar/';
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
$itempic = rand(1000,1000000).".".$imgExt; //rename kedalam angka

	//validasi ektensi gambar b2
			if(in_array($imgExt, $valid_extensions)){			
		//jika gambar lebih kecil b1
				if($imgSize< 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$itempic);
	$perintah=sprintf("INSERT INTO tpdb_daftar
	VALUES('null','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','$itempic')",
	$_POST['nama_siswa'],
	$_POST['tempat_lahir'],
	$_POST['tanggal_lahir'],
	$_POST['jenis_kelamin'],
	$_POST['sekolah'],
	$_POST['nisn'],
	$_POST['orang_tua'],
	$_POST['alamat'],
	$_POST['rt'],
	$_POST['rw'],
	$_POST['desa'],
	$_POST['kecamatan'],
	$_POST['kota'],
	$_POST['provinsi'],
	$_POST['no_tlp'],
	$_POST['status_siswa'],
	'$itempic');
$query=mysqli_query($koneksi,$perintah);
if(!$query) {
				echo "Akses Gagal<br/>";
				echo "ERROR:".mysqli_error();
				}
				else{					
			echo "<script>alert('Data berhasil disimpan!')</script>";			
			echo "<script>window.open('index.php?page=tambah','_self')</script>";
				}
			}
			//jika gambar kecil b1
			
			else{
			echo "<script>alert('Maaf file terlalu besar.')</script>";	
			echo "<script>window.open('index.php?page=tambah','_self')</script>";
			}

			//jika gambar terlalu besar b1

}//akhiri fungsi b1
//validasi ektensi gambar b2
			else{
				
	echo "<script>alert('Maaf file tidak sesuai atau file kosong.')</script>";				
	echo "<script>window.open('index.php?page=tambah','_self')</script>";
				
			}
//validasi akhir b2
}
		



?>
