<?php

include('koneksi.php');
$name=true;
if(isset($_POST['nama'])==""){
    echo"<script>window.alert('Maaf,Form tidak boleh kosong....!!!');window.location=('../index.php?halaman=home');</script>";
    $name=false;
    
}
$em=true;
if(isset($_POST['email'])==""){
    echo"<script>window.alert('Maaf,Form tidak boleh kosong....!!!');window.location=('../index.php?halaman=home');</script>";
    $em=false;
    }else{
        if(!cek_mail($_POST['email'])){
            echo "Masukan alamat email dengan benar<br/>";
            echo "<pre> Contoh:rais_subakti@yahoo.com</pre><br/>";
            $em=false;
    
        }
    }
$jud=true;
if(isset($_POST['judul'])==""){
echo"<script>window.alert('Maaf,Form tidak boleh kosong....!!!');window.location=('../index.php?halaman=home');</script>";
$jud=false;
    }   
$pes=true;
if(isset($_POST['pesan'])==""){
echo"<script>window.alert('Maaf,Form tidak boleh kosong....!!!');window.location=('../index.php?halaman=home');</script>";
$pes=false;
    }
$cek=($name&&$em&&$jud&&$pes)?true:false;
if($cek==true){
$perintah=sprintf("INSERT INTO tpdb_tamu VALUES('null','%s','%s','%s','%s','%s','%s')",
    $_POST['nama'],
    $_POST['email'],
    $_POST['judul'],
    $_POST['pesan'],
    $_POST['tanggal'],
    $_POST['ip']);
$query=mysqli_query($koneksi,$perintah);
    if(!$query){
echo "Gagal melakukan koneksi<br/>";
echo "Maybe:".mysqli_error();

        }else{
         echo"<script>window.alert('Data berhasil disimpan');window.location=('../index.php?halaman=home');</script>";
           }
}

    function cek_mail($email){
    if(ereg("^.+@.+\\..+$",$email)){
    $hasil=true;
                    
}else{
 $hasil=false;
  }
return $hasil;
 }        
            



?>

