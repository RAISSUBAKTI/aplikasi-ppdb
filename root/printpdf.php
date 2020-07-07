<?php
 // Define relative path from this script to mPDF
 $dokumen='Formulir Pendaftaran Siswa'; //Nama Dokumen
define('_MPDF_PATH','mpdf/'); //letak folder mpdf
include(_MPDF_PATH . "mpdf.php"); //panggil mpdf.php
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start();
?>
<!--Koding mulai, Anda bisa jalankan kode php,html, css pada baris ini.-->
<?php

//This code created by blues
//if you have any question
//contact me : rais_subakti@yahoo.com
include('system/conf/koneksi.php');

$detail=$_GET['pdf'];
$query="select * from tpdb_daftar where id='$detail'";
$perintah=mysqli_query ($koneksi,$query) 
or die ("Gagal melakukan koneksi".mysqli_error());
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
$dta_foto=$dta_sws['foto'];
?>
<html>
<head>
<title>Pendaftaran</title>
</head>
<body>
<table border="0">

<tr>
    <td colspan="2" align="center"><strong>SURAT PERNYATAAN PESERTA DIDIK</strong></td>
  </tr>
<tr>
    <td colspan="2" align="center"><strong>MADRASAH TSANAWIYAH ULUL ALBAB</strong></td>
  </tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="2" align="center"><img src="../ppdb/gambar/<?php echo $dta_foto; ?>" width="100" height="120"/></td>
</tr>
 
  <tr>
    <td width="295">Nama</td>
    <td width="406">: <?php echo "$dta_namasiswa"; ?></td>
  </tr>
  <tr>
    <td>Tempat Tanggal Lahir </td>
    <td>: <?php echo "$dta_tempatlahir $dta_tanggallahir"; ?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin </td>
    <td>: <?php echo "$dta_jeniskelamin"; ?></td>
  </tr>
  <tr>
  <td>Alamat Lengkap </td>
 <td>: <?php echo "$dta_alamat RT $dta_alamat2 RW $dta_alamat3 Ds.$dta_alamat4";?></td>
 <tr>
 <td></td>
 <td>: <?php echo "Kec. $dta_alamat5 Kab.$dta_kota"?></td>
 </tr>
  </tr>
  <tr>
    <td>Paket Kehalian </td>
    <td>:</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
</table>
<table width="723" border="0" style="margin-top: 50px 0;">
  <tr>
    <td colspan="2" align="center"><strong>Menyatakan</strong></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><strong>Bahwa selama menjadi Peserta Didik, saya:</strong></td>
  </tr>
  <tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
  <tr>
    <td width="20">1</td>
    <td width="673"><p align="left">Bahwa selama mejadi Peserta Didik, saya:</p>    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>Akan belajar dengan tekun dan penuh  semangat;</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Akan menjaga nama baik Pribadi,  Keluarga, dan Sekolah;</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Sanggup mentaati dan mematuhi Tata  Tertib Peserta Didik serta Peraturan MTs. Ulul Albab;</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Akan mengikuti pendidikan Agama  Islam;</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Akan Mengikuti kegiatan ekstra kurikuler yang dilaksanakan di sekolah;</td>
  </tr>
  <tr>
    <td>7</td>
    <td>Apabila saya tidak mentaati Peraturan yang ditetapkan oleh sekolah, saya sanggup menerima sanksi yang berlaku</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><p align="left">Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dengan penuh tanggung jawab</p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

</table>
<table border="0">
<tr>
    <td width="295">&nbsp;</td>
    <td width="406">&nbsp;</td>
  </tr>
<tr>
    <td align="center">Mengetahui</td>
    <td align="center">Bandung, <?php echo date("d-m-y");?> </td>

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
 </table>

</body>
</html>
<?php
//batas kodingan 
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($dokumen.".pdf" ,'I');
exit;
?>
