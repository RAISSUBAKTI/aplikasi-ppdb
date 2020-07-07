<?php
include('system/conf/koneksi.php');

$perintah="SELECT * FROM tpdb_user";
$query=mysqli_query($koneksi,$perintah)or die ("Gagal melakukan koneksi".mysqli_error());
$tampil=mysqli_fetch_array($query);
$id=$tampil['id'];
$username=$tampil['username'];
$password=$tampil['password'];
$nama=$tampil['nama'];
$email=$tampil['email'];
$level=$tampil['level'];
$foto=$tampil['foto'];
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
                <h2 class="page-header">Administrator</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Profile 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                <form role="form" method="post" action="psb-user-update.php" enctype="multipart/form-data">
                                <table class="table table-striped table-bordered table-hover">
                                  
                                    <tbody>
                 

            <tr>  
                      <td rowspan="4"><img src="images/user/<?php echo $foto; ?>" width="100" height="120"/></td>                         
                    <td>Username</td>
                    <td><input class="form-control" type="text" name="username" value="<?php echo"$username";?>" required="">
                    <input class="form-control" type="hidden" name="id" value="<?php echo"$id";?>"></td>
                    </tr>

                    <tr>
                    <td>Password</td>
                    <td><input class="form-control" type="password" name="password" id="password" required=""></td>
                    </tr>
                    <tr>
                    <td>Nama</td>
                    <td><input class="form-control" type="nama" name="nama" id="nama" value="<?php echo"$nama";?>" required=""></td>
                    </tr>

                    <tr>
                    <td>Email</td>
                    <td><input class="form-control" type="text" name="email" value="<?php echo"$email";?>" required="">
                    <input type="hidden" name="level" id="level" value="<?php echo"$level";?>">
                    </td>
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
