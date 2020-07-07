
<?php
//Melakukan kontrol pada kunci
include('system/conf/psb-koneksi.php');
$perintah="SELECT * FROM tpdb_kunci_set"; 
$jalankan=mysqli_query($koneksi,$perintah); 
$data=mysqli_fetch_array($jalankan); 
$status="yes"; 
if($data['setkunci']==$status){ 
	include('system/conf/sesi.php');  
}else{
	
}
?>

<?php
//panggil file css dan head yang terpisah
include ('system/inc/head.php');
echo '<script src="../assets/jquery-ui-1.11.4/external/jquery/jquery.js"></script>';
include ('system/inc/css.php');
include ('system/inc/navi2.php');

?>					
											
<div class="container">		
<!--CONTAINER START-->											
<h3>Form Pendaftaran Siswa Baru</h3>
<p>Silahkan isi form dibawah ini dengan lengkap dan benar</p>
<form method="post" action="psb-daftar-proses.php" enctype="multipart/form-data">
<div class="row uniform">
<div class="12u"><input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required="" /></div>
</div>
<div class="row uniform">
<div class="6u 12u(xsmall)"><input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required="" /></div>
<div class="6u 12u(xsmall)"><input type="text" name="tanggal" id="tanggal" placeholder="Tanggal lahir : tahun/bulan/tanggal" required="" /></div></div>
<div class="row uniform">
<div class="12u">
<label>Jenis Kelamin:</label>
<div class="select-wrapper">
<select name="jenis_kelamin" id="jenis_kelamin" required="">
<option value="Laki - laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
</div>
</div>
</div>
<div class="row uniform">
<div class="6u 12u(xsmall)"><input type="text" name="sekolah" id="sekolah" placeholder="Asal Sekolah" required="" /></div>
<div class="6u 12u(xsmall)"><input type="text" name="nisn" id="nisn" placeholder="NISN" required="" /></div></div>
<div class="row uniform">
<div class="12u"><input type="text" name="orang_tua" id="orang_tua" placeholder="Nama Orang Tua / Ayah / Ibu" required="" /></div></div>
<div class="row uniform">
<div class="2u 12u(xsmall)"><input type="text" name="alamat" id="alamat" placeholder="Dusun" required="" /></div>
<div class="2u 12u(xsmall)"><input type="text" name="rt" id="rt" placeholder="RT" required="" /></div>
<div class="2u 12u(xsmall)"><input type="text" name="rw" id="rw" placeholder="RW" required="" /></div>
<div class="3u 12u(xsmall)"><input type="text" name="desa" id="desa" placeholder="Desa" required="" /></div>
<div class="3u 12u(xsmall)"><input type="text" name="kecamatan" id="kecamtan" placeholder="Kecamatan" required="" /></div>
</div>
<div class="row uniform">
<div class="6u 12u(xsmall)"><input type="text" name="kota" id="kota" placeholder="Kota/Kabupaten" required="" /></div>
<div class="6u 12u(xsmall)"><input type="text" name="provinsi" id="provinsi" placeholder="Propinsi" required="" /></div>
</div>
<div class="row uniform">
<div class="6u 12u(xsmall)"><input type="text" name="no_tlp" id="no_tlp" placeholder="Nomor Telepon" required="" /></div>
<div class="6u 12u(xsmall)"><i>Foto tidak boleh lebih dari 2MB</i><input type="file" name='foto' id='foto' required=""/></div>
</div>

<div class="row uniform">
<div class="12u">
<ul class="actions">

<li><input type="submit" class="special" value="kirim" /></li>
<li><input type="reset" value="Batal" /></li>
</ul>
</div>
</div>
</form>
</div>
<!---Jquery Ui dipisahkan dengan Jquery di footer.php agar tidak bentrok -->
 <!-- Footer -->
<section id="footer">
<div class="container">
<ul class="copyright">
<li>&copy; MTs. Ulul Albab. All rights reserved.</li><li>Design: <a href="#">Blues</a></li>
</ul>
</div>
</section>

</div>

		<!-- Scripts -->
	
	<!-- <script src="../assets/js/jquery.min.js"></script> Jquery ini di nonaktifkan agar tidak bentrok dengan jquery UI -->
<script src="../assets/js/jquery.scrollzer.min.js"></script>	
<script src="../assets/js/jquery.scrolly.min.js"></script>
<script src="../assets/js/skel.min.js"></script>
<script src="../assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="../assets/js/main.js"></script>	
</body>
</html>
							
