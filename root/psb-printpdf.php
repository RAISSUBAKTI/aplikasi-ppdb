<?php
 // Define relative path from this script to mPDF
 $dokumen='DATA SEMUA SISWA'; //Nama Dokumen
define('_MPDF_PATH','mpdf/'); //letak folder mpdf
include(_MPDF_PATH . "mpdf.php"); //panggil mpdf.php
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start();
?>
<!--Koding mulai, Anda bisa jalankan kode php,html, css pada baris ini.-->
<?php

//This code created by BLUES
//if you have any question
//contact me : rais_subakti@yahoo.com
include('system/conf/sesi.php');
include('system/conf/koneksi.php');
$query="select * from tpdb_daftar order by id desc";
$perintah=mysqli_query ($koneksi,$query) or die ("Gagal melakukan koneksi".mysqli_error());


?>
<html>
<head>
<style type="text/css">
    table{
        border: 1px solid #000;
        width: 100%;
        padding: 10px 10px;
        
       }
       body{
        font-size: 13px;

       }
</style>
</head>
<body>

<table align="center" style="background-color: #FFF000">
<tr>
<td colspan="2" align="center" style="font-size: 24px"><strong>DATA SISWA</strong></td>
</tr>
<tr>
 <td colspan="2" align="center" style="font-size: 18px"><strong>MADRASAH TSANAWIYAH ULUL ALBAB</strong></td>
 </tr>
 </table>
<?php while($data=mysqli_fetch_array($perintah)){

 ?>  
<table>
<tbody>
        
<tr>  
<td rowspan="9" valign="top">
<img src="../ppdb/gambar/<?php echo $data['foto']; ?>" width="100" height="120"/>
</td>

                               
                    <td>Nama</td>
                    <td>: <?php echo $data['nama_siswa'];?></td>
                    </tr>
                    <tr>
                    <td>Jenis Kelamin</td>
                    <td>: <?php echo $data['jenis_kelamin'];?></td>
                    </tr>
                        <tr>
                    <td>Tempat Lahir</td>
                    <td>: <?php echo $data['tempat_lahir'];?></td>
                    </tr>

                    <tr>
                    <td>Tanggal Lahir</td>
                    <td>: <?php echo $data['tanggal_lahir'];?></td>
                    </tr>
                    <tr>
                    <td>Asal Sekolah</td>
                    <td>: <?php echo $data['sekolah'];?></td>
                    </tr>
                    <tr>
                    <td>No.Hp</td>
                    <td>: <?php echo $data['no_tlp'];?></td>
                    </tr>

                    <tr>
                    <td>Alamat Lengkap </td>
                    <td>: <?php echo" $data[alamat] RT $data[rt] RW $data[rw] Ds.
                    $data[desa]";?></td>
                    <tr>
                    <td></td>
                    <td>: <?php echo "Kec. $data[kecamatan] Kab.$data[provinsi]";?></td>
                    </tr>
                    </tr>

                     <tr>
                    <td>No.HP</td>
                    <td>: <?php echo $data['no_tlp'];?></td>
                    </tr>
                    
                    <tr>
                    <td align="right" colspan="3" style="font-size: 9px"><em>Data Siswa yang sudah mendaftar</em></td>
                    </tr>
                   
             
                 


</tbody>           
</table>
<?php }?>
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