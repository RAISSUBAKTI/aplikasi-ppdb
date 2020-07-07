<?php
include('system/conf/psb-koneksi.php');
$perintah2="SELECT * FROM tpdb_kunci_set"; 
$jalankan=mysqli_query($koneksi,$perintah2); 
$data=mysqli_fetch_array($jalankan); 
$status="yes"; 
if($data['setkunci']==$status){ 
	include('system/conf/sesi.php');  
}else{
	
}

?>

<?php

include ('system/inc/head.php');
include ('system/inc/css.php');
include ('system/inc/navi2.php');



$awal=0;
$byk_tampil=4; 

if(isset($_GET['hal'])){

    $awal=$_GET['hal']*$byk_tampil; 
}
$perintah="SELECT * FROM tpdb_daftar order by id desc";
$limit="limit $awal,$byk_tampil"; 
$per_limit=sprintf("%s %s",$perintah,$limit);
$allquery=mysqli_query($koneksi, $perintah); 
$per_laman=mysqli_query($koneksi,$per_limit); 
$jumlah=mysqli_num_rows($allquery); 
?>
<div id="wrapper">
<!-- Main -->
<div id="main">
<div class="container">
<section>
<header class="major">
<h2>Pengumuman</h2>
<p>Siswa yang sudah mendaftar</p>
</header>
<p>Bila Anda sudah mendaftar namun status datanya masih belum diverifikasi, maka harap bersabar, karena kemungkinan belum diverifikasi/diperiksa oleh Panitia PPDB, jadi nanti bisa langsung saja print datanya untuk diserahkan ke panitia PPDB</p>
<div class="table-wrapper">
<table class="alt">
<tr>
<td>No</td>
<td>Nama Siswa</td>
<td>Asal Sekolah</td>
<td>Status Pendaftaran</td>
<td>Print</td>
</tr>
<tbody>
<?php

$no=$awal+1; 

while($data=mysqli_fetch_array($per_laman)){
?>
<tr>
<td><?php echo $data['id']; ?></td>
<td><?php echo $data['nama_siswa'];?></td>
<td><?php echo $data['sekolah'];?></td>
<td><?php echo $data['status_siswa'];?></td>
<td>
<a href="psb-print-pengumuman.php?print=<?php echo $data['id']; ?>" target=_"blank"><i class="fa fa-print fa-fw" alt="print" title="Print"></i></a></td>
</tr>
<?php $no+=1;} //selanjutnya berarti 0+1=1, nomor data dimulai dari 1 jika kamu pake variabel $no ?>
<tfoot>
<tr>
<td colspan="4">Jumlah Pendaftar Saat Ini</td>
<td><?php echo $jumlah ?></td>
</tr>
</tfoot>
</tbody>
</table>
<center>
<?php


$ke="pengumuman"; 
$page=ceil($jumlah/4); 
$pg=1;

while($pg<=$page){ 
$hal=$pg-1; 
echo " <a href=\"$ke?hal=$hal\">$pg</a>"; 

    $pg+=1; 
}
?>
<br/>
Halaman :<?php echo" $hal dari $page";?><br/></center>
</div>
</section>
</div>
</div>
<?php
//footer
include('system/inc/footer.php')
?>
