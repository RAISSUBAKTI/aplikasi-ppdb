<?php 
//panggil header, css, navigasi
include('system/conf/koneksi.php');
include('system/inc/header.php');
include('system/inc/css.php');
include('system/conf/sesi.php');
include('system/inc/nav-admin.php');
?>

<?php


$edit=$_GET['edit'];
$query="select * from tpdb_daftar where id='$edit'";
$perintah=mysqli_query ($koneksi,$query) 
or die ("Gagal konek".mysqli_error());
$dta_sws=mysqli_fetch_array($perintah);
$dta_id=$dta_sws['id'];
$dta_namasiswa=$dta_sws['nama_siswa'];
$dta_tempatlahir=$dta_sws['tempat_lahir'];
$dta_tanggallahir=$dta_sws['tanggal_lahir'];
$dta_jeniskelamin=$dta_sws['jenis_kelamin'];
$dta_sekolah=$dta_sws['sekolah'];
$dta_nisn=$dta_sws['nisn'];
$dta_orangtua=$dta_sws['orang_tua'];
$dta_alamat=$dta_sws['alamat'];
$dta_alamat2=$dta_sws['rt'];
$dta_alamat3=$dta_sws['rw'];
$dta_alamat4=$dta_sws['desa'];
$dta_alamat5=$dta_sws['kecamatan'];
$dta_kota=$dta_sws['kota'];
$dta_provinsi=$dta_sws['provinsi'];
$dta_notlp=$dta_sws['no_tlp'];
$dta_statussiswa=$dta_sws['status_siswa'];
?>





<div class="row">
                <div class="col-lg-6">
                <h2 class="page-header">Edit siswa </h2>
                <p class="page-header"><a href="index.php?page=lihat"><button class="btn btn-default">Kembali</button></a></p>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                            Form Edit siswa
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
<form role="form" method="post" action="psb-edit-proses.php">
                                <table class="table table-striped table-bordered table-hover">
                                  
                                    <tbody>
                 

            <td>Nama</td>
                    <td><input class="form-control" type="text" name="nama_siswa" id="nama_siswa" value="<?php echo"$dta_namasiswa";?>" required=""><input class="form-control" type="hidden" id="id" name="id" value="<?php echo"$dta_id";?>"></td>
                    </tr>

                    <tr>
                    <td>Tempat Lahir</td>
                    <td><input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo"$dta_tempatlahir";?>"  required=""</td>
                    </tr>
                    <tr>
                    <td>Tanggal Lahir</td>
                    <td><input class="tanggal form-control" type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo "$dta_tanggallahir"; ?>" required="">  </td>
                    </tr>
<tr>        
<td>Jenis Kelamin</td>
<td><input required="" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki - Laki"/> | Laki - laki
<br/><input required="" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan"/> | Perempuan</td>

</tr>

                                        <tr>
                    <td>Sekolah</td>
                    <td><input class="form-control" type="text" id="sekolah" name="sekolah" value="<?php echo"$dta_sekolah";?>" required="">  </td>
                    </tr>

                    <tr>
                    <td>NISN</td>
                    <td><input class="form-control" type="text" id="nisn" name="nisn" value="<?php echo"$dta_nisn";?>"  required=""> </td>
                    </tr>

                    <tr>
                    <td>Orang Tua</td>
                    <td><input class="form-control" type="text" id="orang_tua" name="orang_tua" value="<?php echo"$dta_orangtua";?>"  required=""></td>
                    </tr>

                    <tr>
                    <td>Alamat</td>
                    <td><input class="customform form-control" type="text" id="alamat" name="alamat" value="<?php echo"$dta_alamat";?>"  required="">

                     RT: <input class="customform2 form-control" type="text" id="rt" name="rt" value="<?php echo"$dta_alamat2";?>"  required="">
                     Rw: <input class="customform2 form-control" type="text" id="rw" name="rw" value="<?php echo"$dta_alamat3";?>"  required="">
                     Desa: <input class="customform form-control" type="text" id="desa" name="desa" value="<?php echo"$dta_alamat4";?>"  required="">
                     Kecamatan: <input class="customform form-control" type="text" id="kecamatan" name="kecamatan" value="<?php echo"$dta_alamat5";?>"  required="">
                    </td>


                    </tr>
                    <tr>
                    <td>Kota</td>
                    <td><input class="form-control" type="text" id="kota" name="kota" value="<?php echo"$dta_kota";?>" required=""></td>
                    </tr>
                    <tr>
                    <td>Provinsi</td>
                    <td><input class="form-control" type="text" id="provinsi" name="provinsi" value="<?php echo"$dta_provinsi";?>" required=""></td>
                    </tr>
                    <td>No. Telephone</td>
                    <td><input class="form-control" type="text" id="no_tlp" name="no_tlp" value="<?php echo"$dta_notlp";?>" required=""></td>
                    </tr>
                    <tr>
                    <td>Status Siswa</td>
             <td><select class="form-control" name="status_siswa" id="status_siswa" required="">
                    

        <option><?php echo "$dta_statussiswa";?></option>
        <option>Belum diverifikasi</option>
        <option>Diterima</option>
        <option>Ditolak</option>
  
        </select>
                    </td>
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
       


<?php 
//footer
include('system/inc/footer.php');
?>
