<?php
include('system/conf/koneksi.php');
include('system/conf/sesi.php');
$a=true;
if($_POST['fasilitas']==""){
echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
echo "<script>window.open('index.php?page=fasilitas','_self')</script>";
$a=false;
}
$b=true;
if($_POST['deskripsi_fasilitas']==""){
	echo "<script>alert('Form tidak boleh ada yang kosong!')</script>";
	echo "<script>window.open('index.php?page=fasilitas','_self')</script>";
	$b=false;
}
					
$cek=($a&&$b)?true:false;

if($cek==true){//cek lagi apakan semua sudah diisi

$imgFile = $_FILES['foto']['name'];
$tmp_dir = $_FILES['foto']['tmp_name'];
$imgSize = $_FILES['foto']['size'];

$upload_dir = '../images/fasilitas/';
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
$itempic = rand(1000,1000000).".".$imgExt; //rename kedalam angka

	//validasi ektensi gambar b2
			if(in_array($imgExt, $valid_extensions)){			
		//jika gambar lebih kecil b1
				if($imgSize< 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$itempic);
	$perintah=sprintf("INSERT INTO tpdb_web_fasilitas
	VALUES('null','%s','%s','$itempic')",
	$_POST['fasilitas'],
	$_POST['deskripsi_fasilitas'],
	'$itempic');
$query=mysqli_query($koneksi,$perintah);
if(!$query) {
				echo "Akses Gagal<br/>";
				echo "ERROR:".mysqli_error();
				}
				else{					
			echo "<script>alert('Data berhasil disimpan!')</script>";			
			echo "<script>window.open('index.php?page=fasilitas','_self')</script>";
				}
			}
			//jika gambar kecil b1
			
			else{
			echo "<script>alert('Maaf file terlalu besar.')</script>";	
			echo "<script>window.open('index.php?page=fasilitas','_self')</script>";
			}

			//jika gambar terlalu besar b1

}//akhiri fungsi b1
//validasi ektensi gambar b2
			else{
				
	echo "<script>alert('Maaf file tidak sesuai atau file kosong.')</script>";				
	echo "<script>window.open('index.php?page=fasilitas','_self')</script>";
				
			}
//validasi akhir b2
}
		



?>
