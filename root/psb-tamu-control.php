<?php
include('system/conf/koneksi.php');

$sql="SELECT * FROM tpdb_tamu_set";
$perintah=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_array($perintah);
?>
<!-- CEGAH BY PASS PERHALAMAN -->
<?php


 
if(!isset($_SESSION['admin'])){
    echo '<script language="javascript">alert
    ("Anda harus login dulu!");document.location="ssb-login.php?page=masuk";</script>';
}

?>
<div class="row">
                <div class="col-lg-6">
                <h2 class="page-header">Pengaturan Buku Tamu</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Atur aktif dan non aktif buku tamu
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                      <form role="form" method="post" action="psb-tamu-control-proses.php">
<div class="form-group">
<input type="hidden" name="id" value="<?php echo "$row[id]"; ?>">
</div>
<div class="form-group">
<label>Pengaturan Aktif/Tidak Buku Tamu</label>
<select class="form-control" name="status_form" id="status_form" required="">
        <option><?php echo $row['formaktif'];?></option>
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
