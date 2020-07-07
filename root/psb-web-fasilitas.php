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
<h2 class="page-header">Tambah Fasilitas</h2>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
Formulir penambahan fasilitas sekolah
</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-6">
<form role="form" method="post" action="psb-web-fasilitas-proses.php" enctype="multipart/form-data">                                  
<div class="form-group">
<label>Nama Fasilitas</label>
<input class="form-control" placeholder="Judul Fasilitas" id="fasilitas" name="fasilitas" required="">
</div>
<div class="form-group">
<label>Deskripsi Fasilitas:</label>
<textarea class="form-control" placeholder="Deskripsi Fasilitas" id="deskripsi_fasilitas" name="deskripsi_fasilitas" rows="4" required=""></textarea>
</div>
<div class="form-group">
<label>Foto</label>
<input type="file" name="foto" id="foto"required="">
</div>                                                                                         
<button type="submit" class="btn btn-primary" name="tambah" id="tambah">SIMPAN</button>
<button type="reset" class="btn btn-default">Batal</button>
</form>
</div>
</div>
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
$perintah="SELECT * FROM tpdb_web_fasilitas ORDER by id DESC";
$nom="$awal";
$nom2=sprintf("%s",$perintah,$awal);
$query=mysqli_query($koneksi,$nom2);
$jumlah_fasilitas=mysqli_num_rows($query);
?>
<div class="row">
<div class="col-lg-12">
<h2 class="page-header">Fasilitas</h2>
<div class="panel panel-default">
<div class="panel-heading">
Data Fasilitas Sekolah
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<tr>
<th colspan="2">Jumlah Fasilitas </th>
<th colspan="4"><?php echo $jumlah_fasilitas; ?></th>
</tr>
<tr>
<th>No</th>
<th>Nama Fasilitas</th>
<th>Dekripsi</th>
<th>Foto</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php //ngambil data dan memecahnya ke array 
$no=$awal+1;
while($data=mysqli_fetch_array($query)) {                     
                            
    ?>
<tr class="odd gradeX">
<td><?php echo $no;?></td>
<td><?php echo $data['nama_fasilitas'];?></td>
<td><?php echo $data['deskripsi_fasilitas'];?></td>
<td><img src="../images/fasilitas/<?php echo $data['gambar']; ?>" width="60" height="70"/></td>
<td>
<a href="psb-web-fasilitas-del.php?del=<?php echo $data['id']?>"><i class="fa fa-trash-o fa-fw" alt="delete" title="Delete"></i></a>
</td>
</tr>
 <?php $no+=1;  } ?>
</tbody>
</table>
</div>
<div class="panel-footer">
Fasilitas Sekolah
</div>
</div>
</div>
</div>

       
            <!-- /.row -->
                                    
                                 
 