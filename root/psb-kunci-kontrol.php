<?php
include('system/conf/koneksi.php');

$sql="SELECT * FROM tpdb_kunci_set";
$perintah=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_array($perintah);
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
<h2 class="page-header">Pengaturan Kunci Akses</h2>
<div class="panel panel-default">
<div class="panel-heading">
Atur aktif dan non aktif akses kunci
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<form role="form" method="post" action="psb-kunci-kontrol-proses.php">
<div class="form-group">
<input type="hidden" name="id" value="<?php echo "$row[id]"; ?>">
</div>
<div class="form-group">
<label>Pengaturan Aktif/Tidak Kunci Masuk</label>
<select class="form-control" name="status_kunci" id="status_kunci" required="">
<option><?php echo $row['setkunci'];?></option>
<option>yes</option>
<option>no</option>
</select>
</div>
<button type="submit" class="btn btn-primary" name="simpan" id="simpan">Simpan</button>
</form>
</div>
</div>
</div>
</div>
