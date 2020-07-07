 <?php 
 include('system/conf/koneksi.php');

 ?>
<!-- CEGAH BY PASS PERHALAMAN -->
<?php
if(!isset($_SESSION['admin'])){
 echo '<script language="javascript">alert
("Anda harus login dulu!");document.location="psb-login.php?page=masuk";</script>';
}

?>
<div class="row">
<div class="col-lg-12">
<h2 class="page-header">Tambah Visi Misi Sekolah</h2>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
Formulir Visi Misi Sekolah
</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-6">
<form role="form" method="post" action="psb-web-visimisi-proses.php">                 
<div class="form-group">
<label>Visi Misi</label>
<input class="form-control" placeholder="visi misi" id="visimisi" name="visimisi" required=""></div>                                                   
<button type="submit" class="btn btn-primary" name="tambah" id="tambah">Simpan
</button>
<button type="reset" class="btn btn-default">Batal</button>
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
//penomoran dari satu
$awal=0;
$perintah="SELECT * FROM tpdb_web_visimisi ORDER by id DESC";
$nom="$awal";
$nom2=sprintf("%s",$perintah,$nom);
$query=mysqli_query($koneksi,$nom2);
$pesanmasuk=mysqli_num_rows($query);
?>
<div class="row">
<div class="col-lg-12">
<h2 class="page-header">Visi Misi Sekolah</h2>
<div class="panel panel-default">
<div class="panel-heading">
Data visi Misi Sekolah
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<table width="100%" class="table table-striped table-bordered table-hover" >
<thead>
<tr>
<th>No</th>
<th>Visi Misi</th>  
<th colspan="2">Aksi</th>                                              
</tr>
</thead>
 <tbody>
<?php //ngambil data dan memecahnya ke array 
$no=$awal+1;
while($data=mysqli_fetch_array($query)) { ?>
<tr class="odd gradeX">
<td><?php echo $no;?></td>
<td><?php echo $data['visi_misi'];?></td>
<td>
<a href="psb-web-visimisi-del.php?hapus=<?php echo $data['id']?>"><i class="fa fa-trash-o fa-fw" alt="delete" title="Delete"></i></a>
<a href="visi-<?php echo $data['id']?>"><i  class="fa fa-edit fa-fw" alt="detail" title="View Detail"></i></a>
</td>
</tr>
 <?php $no+=1;  } ?>
</tbody>
</table>
</div>
<div class="panel-footer">
Data Visi Misi
</div>
</div>
</div>
</div>
                                    
                                 
 