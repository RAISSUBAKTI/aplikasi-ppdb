<?php
session_start();
include('system/conf/psb-koneksi.php');
$cek=$_POST['kunci'];
if(isset($_POST['lanjutkan'])){
	$key = mysqli_real_escape_string($koneksi, $_POST['kunci']);
 	
	$sql = mysqli_query($koneksi,"SELECT * FROM tpdb_kunci WHERE number_key='$key'") or die(mysqli_error());
	if(mysqli_num_rows($sql) == 0){
		
	
		echo '<script language="javascript">alert("Kunci'.$cek.' tidak ditemukan!"); document.location="kunci-masuk";</script>';
	}else{
		$row = mysqli_fetch_assoc($sql);
		if($row['level'] == 2){
			//jika login dengan level 2 buat session user untuk daftar
			$_SESSION['user']=$user;
			echo '<script language="javascript">alert("Kunci yang Anda masukan benar"); document.location="daftar";</script>';
		}
	}
}

?>
