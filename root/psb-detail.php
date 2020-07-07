<?php

//This code created by blues
//if you have any question
//contact me : rais_subakti@yahoo.com
include('system/conf/koneksi.php');

$detail=mysqli_real_escape_string($koneksi,$_GET['detail']);
$query="select * from tpdb_daftar where id='$detail'";
$perintah=mysqli_query ($koneksi,$query) 
or die ("Gagal koneksi".mysqli_error());
$dta_ssw=mysqli_fetch_array($perintah);
$dta_id=$dta_ssw['id'];
$dta_namasiswa=$dta_ssw['nama_siswa'];
$dta_tempatlahir=$dta_ssw['tempat_lahir'];
$dta_tanggallahir=$dta_ssw['tanggal_lahir'];
$dta_jeniskelamin=$dta_ssw['jenis_kelamin'];
$dta_sekolah=$dta_ssw['sekolah'];
$dta_nisn=$dta_ssw['nisn'];
$dta_orangtua=$dta_ssw['orang_tua'];
$dta_alamat=$dta_ssw['alamat'];
$dta_alamat2=$dta_ssw['rt'];
$dta_alamat3=$dta_ssw['rw'];
$dta_alamat4=$dta_ssw['desa'];
$dta_alamat5=$dta_ssw['kecamatan'];
$dta_kota=$dta_ssw['kota'];
$dta_provinsi=$dta_ssw['provinsi'];
$dta_notlp=$dta_ssw['no_tlp'];
$dta_statussiswa=$dta_ssw['status_siswa'];
$dta_foto=$dta_ssw['foto'];
?>
<?php 
//panggil header, css, navigasi
include('system/inc/header.php');
include('system/inc/css.php');
include('system/conf/sesi.php');
include('system/inc/nav-admin.php');

?>
  

<div class="row">
                <div class="col-lg-6">
                <h2 class="page-header">Detail Siswa</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Profil Siswa MTs. Ulul Albab
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                  
                                    <tbody>
                 

            <tr>  
            <td rowspan="12"><img src="../ppdb/gambar/<?php echo $dta_foto; ?>" width="100" height="120"/></td>                                      
                    <td>Nama</td>
                    <td><?php echo"$dta_namasiswa";?></td>
                    </tr>

                    <tr>
                    <td>Tempat Lahir</td>
                    <td><?php echo"$dta_tempatlahir";?></td>
                    </tr>
                    <tr>
                    <td>Tanggal Lahir</td>
                    <td><?php echo date("d/F/Y",strtotime($dta_tanggallahir));?></td>
                    </tr>

                    <tr>
                    <td>Jenis Kelamin</td>
                    <td><?php echo"$dta_jeniskelamin";?></td>
                    </tr>

                    <tr>
                    <td>Asal Sekolah</td>
                    <td><?php echo "$dta_sekolah";?></td>
                    </tr>

                    <tr>
                    <td>NISN</td>
                    <td><?php echo "$dta_nisn";?></td>
                    </tr>

                    <tr>
                    <td>Orang Tua</td>
                    <td><?php echo"$dta_orangtua";?></td>
                    </tr>

                    <tr>
                    <td>Alamat SIswa</td>
                    <td><?php echo"$dta_alamat RT $dta_alamat2 RW $dta_alamat3 Desa $dta_alamat4 Kecamatan $dta_alamat5";?></td>
                    </tr>
                    <tr>
                    <td>Kota</td>
                    <td><?php echo"$dta_kota";?></td>
                    </tr>
                    <tr>
                    <td>Provinsi</td>
                    <td><?php echo"$dta_provinsi";?></td>
                    </tr>
                    <tr>
                    <td>No. Telephone</td>
                    <td><?php echo"$dta_notlp";?></td>
                    </tr>
                     <tr>
                    <td>Status</td>
                    <td><?php echo"$dta_statussiswa";?></td>
                    </tr>
                    
                    


                                        
                                    </tbody>
                                </table>
        <p class="page-header"><a href="index.php?page=lihat"><button class="btn btn-default">Kembali</button></a> <a href="edit-<?php echo "$dta_id"; ?>"<button class="btn btn-default">Edit</button></a> <a href="psb-print.php?print=<?php echo "$dta_id"; ?>" target="_blank"<button class="btn btn-primary">Print</button></a>
        </p>


                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                </div>
<?php 
//footer
include('system/inc/footer.php');
?>
