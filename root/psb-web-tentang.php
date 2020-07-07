<?php
include('system/conf/koneksi.php');

$perintah="SELECT * FROM tpdb_web_tentang";
$query=mysqli_query($koneksi,$perintah)or die ("Gagal melakukan koneksi".mysqli_error());
$tampil=mysqli_fetch_array($query);
$id=$tampil['id'];
$judul=$tampil['judul'];
$tentang=$tampil['tentang'];
?>
<!-- CEGAH BY PASS PERHALAMAN -->
<?php
if(!isset($_SESSION['admin'])){
 echo '<script language="javascript">alert
 ("Anda harus login dulu!");document.location="psb-login.php?page=masuk";</script>';
}

?>
<div class="row">
<div class="col-lg-6">
<h2 class="page-header">Halaman Depan Website</h2>
<div class="panel panel-default">
<div class="panel-heading">
Masukan deskripsi singkat tentang sekolah Anda
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<form role="form" method="post" action="psb-web-tentang-proses.php">
<div class="form-group">
<label>Judul:</label>
<input type="hidden" name="id" value="<?php echo "$tampil[id]"; ?>">
<input type="text" name="judul" id="judul" class="form-control" 
value="<?php echo "$tampil[judul]"; ?>" required="">
</div>
<div class="form-group">
<label>Tentang Sekolah Anda :</label>
<textarea class="form-control" name="tentang" id="tentang" rows="5" required="">
<?php echo "$tampil[tentang]"; ?></textarea>
</div>
<button type="submit" class="btn btn-primary" name="simpan" id="simpan">Simpan</button>
</form>
</div>
</div>
</div>
</div>
