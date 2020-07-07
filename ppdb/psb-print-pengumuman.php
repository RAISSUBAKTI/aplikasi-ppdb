<?php
include('system/conf/psb-koneksi.php');
$perintah2="SELECT * FROM tpdb_kunci_set"; 
$jalankan=mysqli_query($koneksi,$perintah2); 
$data=mysqli_fetch_array($jalankan); 
$status="yes"; 
if($data['setkunci']==$status){ 
	include('system/conf/sesi.php');  
}else{
	
}

?>

<?php


include ('system/inc/css.php');

$detail=mysqli_real_escape_string($koneksi, $_GET['print']);
$query="select * from tpdb_daftar where id='$detail'";
$perintah=mysqli_query ($koneksi,$query) 
or die ("Gagal melakukan koneksi".mysqli_error());
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

<div class="container">
<section>
<div class="table-wrapper">
<table class="alt">
 <tbody>              
<tr>
<td colspan="3"><h4 align="center">SURAT PERNYATAAN CALON PESERTA DIDIK</h4></td>
</tr>
<tr>  
<td rowspan="11" valign="top"><img src="../ppdb/gambar/<?php echo $dta_foto; ?>" width="100" height="120"/></td>                                      
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
<td>Alamat Siswa</td>
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
<td>Status</td>
<td><?php echo"$dta_statussiswa";?></td>
</tr>
<tr>
<td colspan="3"><p align="center"><strong>Menyatakan  Bahwa selama menjadi Peserta Didik, saya:  </strong></p>
<ol>
  <li> Bahwa selama mejadi Peserta Didik, saya:  </li>
  <li> Akan belajar dengan tekun dan penuh semangat;  </li>
  <li> Akan menjaga nama baik Pribadi, Keluarga, dan Sekolah;</li>
  <li> Sanggup mentaati dan mematuhi Tata Tertib Peserta Didik serta Peraturan MTs. Ulul Albab;  </li>
  <li> Akan mengikuti pendidikan Agama Islam;</li>
  <li> Akan Mengikuti kegiatan ekstra kurikuler yang dilaksanakan di sekolah;</li>
  <li> Apabila saya tidak mentaati Peraturan yang ditetapkan oleh sekolah, saya sanggup menerima  sanksi yang berlaku  Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dengan penuh tanggung </li>
</ol></td>
</tr>
</tbody>
 </table>
</div>
<div class="table-wrapper">
<table class="alt">
<tbody>
<tr>
<td colspan="3">Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dengan penuh tanggung jawab</td>
   </tr>
<tr>
    <td align="center">Mengetahui</td>
    <td align="center"><?php echo"$dta_kota";?>, <?php echo date("d-m-y");?> </td>

  </tr>
  <tr>
    <td align="center">Orang Tua/Wali </td>
    <td align="center">Yang membuat Pernyataan </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" ><strong><u><?php echo"$dta_orangtua";?></u></strong></td>
    <td align="center"><strong><u><?php echo"$dta_namasiswa";?></u></strong></td>
  </tr>
</tbody>
</table>
</div>

</section>
</div>
<?php 
echo "<script>window.print()</script>";
?>

