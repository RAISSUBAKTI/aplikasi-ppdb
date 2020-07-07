<?php 
include('system/conf/koneksi.php');
include('system/inc/header.php');
include('system/inc/css.php');
include('system/conf/sesi.php');
include('system/inc/nav-admin.php');
//if(isset($_GET['id']) and $_GET['id']!=""){
$edit=mysqli_real_escape_string($koneksi, $_GET['visi']);
$sql="select * from tpdb_web_visimisi where id='$edit'";
$perintah=mysqli_query($koneksi,$sql);
$data=mysqli_fetch_array($perintah);

?>
<div class="row">
<div class="col-lg-12">
<h2 class="page-header">Edit Visi Misi Sekolah</h2>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
Edit
</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-6">
<form role="form" method="post" action="psb-web-edit-visimisi-proses.php">                 
<div class="form-group">
<label>Visi Misi</label>
<input type="hidden" class="form-control" id="id" name="id" value="<?php echo "$data[id]";?>" required="">
<input class="form-control" id="visimisi" name="visimisi" value="<?php echo "$data[visi_misi]";?>" required=""></div>      

<button type="submit" class="btn btn-primary" name="simpan" id="simpan">Simpan
</button>
</form>
</div> </div>
 <!-- /.row (nested) -->
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<?php 
//footer
include('system/inc/footer.php');
?>
