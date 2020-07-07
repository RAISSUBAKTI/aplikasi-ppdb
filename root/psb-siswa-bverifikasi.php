<?php
//penomoran dari satu

$awal=0;
include('system/conf/koneksi.php');

$perintah="SELECT * FROM tpdb_daftar where status_siswa='Belum diverifikasi'";
$nom="$awal";
$nom2=sprintf("%s",$perintah,$nom);
$query=mysqli_query($koneksi,$nom2);
$jumlah_siswa=mysqli_num_rows($query);
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
                <h2 class="page-header">Siswa yang belum diverifikasi</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Siswa yang belum diverifikasi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                        <th colspan="2">Jumlah siswa </th>
                                        <th colspan="3"><?php echo $jumlah_siswa; ?></th>
                                                                               
                                    
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama siswa</th>
                                        <th>No.Tlp</th>
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
<td><?php echo $data['nama_siswa'];?></td>
<td><?php echo $data['no_tlp'];?></td>


<td>
<a href="detail-<?php echo $data['id']?>"><i  class="fa fa-eye fa-fw" alt="detail" title="View Detail"></i></a>
<a href="psb-edit.php?edit=<?php echo $data['id']?>"><i class="fa fa-edit fa-fw" alt="edit" title="Edit"></i></a>
<a href="del.php?del=<?php echo $data['id']?>"><i class="fa fa-trash-o fa-fw" alt="delete" title="Delete"></i></a>
<a href="print-102-Zb-index/<?php echo $data['id']?>" target=_"blank"><i class="fa fa-print fa-fw" alt="print" title="Print"></i></a>
</td>


                                    </tr>
 <?php $no+=1;  } ?>
                                    </tbody>
                                    </table>
                                    </div>
                                    <div class="panel-footer">
                          Siswa MTs. Ulul Albab
                        </div>
                                    </div>

                                    </div>
                                    </div>

       
            <!-- /.row -->
