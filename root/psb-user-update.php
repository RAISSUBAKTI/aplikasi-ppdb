<?php
//This code created by BLUES
//if you have any question
//contact me : rais_subakti@yahoo.com
include('system/conf/sesi.php');
include('system/conf/koneksi.php');
$id=true;
if($_POST['id']=="") {
	echo "<script>alert('Data Kosong!')</script>";			
	echo "<script>window.open('index.php?page=user','_self')</script>";
	$id=false;
}
$username=true;
if($_POST['username']==""){
	echo "<script>alert('Data Kosong!')</script>";			
	echo "<script>window.open('index.php?page=user','_self')</script>";
	$username=false;
}
$password=true;
if($_POST['password']==""){
	echo "<script>alert('Data Kosong!')</script>";			
	echo "<script>window.open('index.php?page=user','_self')</script>";
	$password=false;
}
$nama=true;
if($_POST['nama']==""){
	echo "<script>alert('Data Kosong!')</script>";			
	echo "<script>window.open('index.php?page=user','_self')</script>";
	$nama=false;
}
$email=true;
if($_POST['email']==""){
	echo "<script>alert('Data Kosong!')</script>";			
	echo "<script>window.open('index.php?page=user','_self')</script>";
	$email=false;
}



$cek=($id&&$username&&$password&&$nama&&$email);
if($cek==true){
$imgFile = $_FILES['foto']['name'];
$tmp_dir = $_FILES['foto']['tmp_name'];
$imgSize = $_FILES['foto']['size'];

$upload_dir = 'images/user/';
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
$foto = rand(1000,1000000).".".$imgExt; //rename kedalam angka

		//validasi ektensi gambar b2
			if(in_array($imgExt, $valid_extensions)){			
		//jika gambar lebih kecil b1
if(!$imgSize < 2000000)				{
move_uploaded_file($tmp_dir,$upload_dir.$foto);

$id=$_POST['id'];
$username=$_POST['username'];
$pass=$_POST['password'];
$password=md5($pass);
$nama=$_POST['nama'];
$email=$_POST['email'];
$level=$_POST['level'];

	$perintah="UPDATE tpdb_user SET
	username='$username',
	password='$password',
	nama='$nama',
	email='$email',
	level='$level',
	foto='$foto'
	WHERE id='$id'";

$query=mysqli_query($koneksi,$perintah);


if(!$query) {
				echo "Akses Gagal<br/>";
				echo "ERROR:".mysqli_error();
				}
				else{					
			echo "<script>alert('Data successfully saved!')</script>";			
			echo "<script>window.open('index.php?page=user','_self')</script>";
				}
			}
			//jika gambar kecil b1
			
			else{
			echo "<script>alert('Sorry, your file is too large.')</script>";	
			echo "<script>window.open('index.php?page=user','_self')</script>";
			}

			//jika gambar terlalu besar b1

}//akhiri fungsi b1
//validasi ektensi gambar b2
else{
				
	echo "<script>alert('Gambar tidak ditemukan atau gambar tidak sesuai dengan ketentuan.')</script>";				
	echo "<script>window.open('index.php?page=user','_self')</script>";
				
			}
//validasi akhir b2
}

?>
