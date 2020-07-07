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
                    <h2 class="page-header">Tambah Siswa</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Formulir penambahan siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                <form role="form" method="post" action="psb-tambah-proses.php" enctype="multipart/form-data">
                                    
<div class="form-group">
<label>Nama Siswa</label>
<input class="form-control" placeholder="Nama siswa" id="nama_siswa" name="nama_siswa" required="">
</div>
<div class="form-group">
<label>Tempat Lahir :</label>
<input class="form-control" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir" required="">
</div>
<div class="form-group">
<label>Tanggal Lahir :</label>
<input type="text" name="tanggal_lahir" id="tanggal_lahir" class="tanggal form-control" required="" placeholder="Tanggal Lahir" />
</div>
<div class="form-group">
<label>Jenis Kelamin :</label>
<div class="checkbox">
<label class="checkbox-inline">
 <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki - Laki"/> | Laki - laki
<br/><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan"/> | Perempuan
</label>
</div>
</div>
<div class="form-group">
<label>Asal Sekolah :</label>
<input class="form-control" placeholder="Sekolah" id="sekolah" name="sekolah" required="">
</div>
<div class="form-group">
<label>NISN:</label>
<input class="form-control" placeholder="NISN" id="nisn" name="nisn" required="">
</div>
<div class="form-group">
<label>Nama Orang Tua :</label>
<input class="form-control" placeholder="Ayah/Ibu" id="orang_tua" name="orang_tua" required="" >
</div>
<div class="form-group">
<label>Alamat Siswa :</label>
<input class="customform form-control" placeholder="contoh: Jalan Raya Parigi" id="alamat" name="alamat" required=""> <br/>
<input class="customform2 form-control" placeholder="RT" id="rt" name="rt" required=""><br/>
<input class="customform2 form-control" placeholder="RW" id="rw" name="rw" required=""><br/>
<input class="customform form-control" placeholder="Kelurahan/Desa" id="desa" name="desa" required=""><br/>
<input class="customform form-control" placeholder="Kecamatan" id="kecamatan" name="kecamatan" required=""><br/>
<input class="form-control" placeholder="Kota" id="kota" name="kota" required=""><br/>
<input class="form-control" placeholder="Provinsi" id="provinsi" name="provinsi" required="">
</div>
<div class="form-group">
<label>No Telephone/HP :</label>
<input class="form-control" placeholder="No Telephon" id="no_tlp" name="no_tlp" required="">
</div>
<div class="form-group">
<label>Status Siswa :</label>
<select class="form-control" name="status_siswa" id="status_siswa" required="">
<option>Belum diverivikasi</option>
<option>Diterima</option>
<option>Ditolak</option>
</select>
</div>

<div class="form-group">
<label>Foto</label>
<input type="file" name="foto" id="foto"required="">
</div>

                                                           
                                       
<button type="submit" class="btn btn-primary" name="tambah" id="tambah">Tambah</button>
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

                                    
                                 
 