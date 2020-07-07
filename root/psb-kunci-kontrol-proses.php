<?php

include('system/conf/koneksi.php');
include('system/conf/sesi.php');
$form=true;
if(isset($_POST['status_kunci'])=="") {
echo"Data untuk status masih kosong";
$form=false;
}
$cek=($form);
if($cek==true){
$id=$_POST['id'];
$status=$_POST['status_kunci'];
$perintah="UPDATE tpdb_kunci_set SET setkunci='$status' WHERE id='$id'";
$query=mysqli_query($koneksi,$perintah);
if(!$query) {
echo "Akses Gagal<br/>";
echo "ERROR:".mysqli_error();
}else{					
echo "<script>window.open('index.php?page=pengaturan-kunci','_self')</script>";
}
}

?>
