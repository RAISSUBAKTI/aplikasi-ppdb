<?php
include('system/conf/koneksi.php');

$perintah="SELECT * FROM tpdb_web_head";
$query=mysqli_query($koneksi,$perintah)or die ("Gagal melakukan koneksi".mysqli_error());
$head=mysqli_fetch_array($query);
$id=$head['id'];
$deskripsi=$head['deskripsi'];
$foto=$head['foto'];
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
<h2 class="page-header">Header</h2>
<div class="panel panel-default">
<div class="panel-heading">
Header bagian Navigasi
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<div class="table-responsive">
<form role="form" method="post" action="psb-web-navhead-proses.php" enctype="multipart/form-data">
<table class="table table-striped table-bordered table-hover">
<tbody>
<tr>  
<td rowspan="1"><img src="../images/head/<?php echo $foto; ?>" width="60" height="70"/></td>
<td>Deskripsi Header :</td>
<td><textarea class="form-control" type="text" name="deskripsi" rows="2"
  required=""><?php echo"$deskripsi";?></textarea>
<input class="form-control" type="hidden" name="id" value="<?php echo"$id";?>"></td>
</tr>
<tr>
<td colspan="3"><input type="file" name="foto" id="foto" required=""></td>
</tr>
               


                                        
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary" name="update" id="update">Update</button>
                                </form>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                </div>
