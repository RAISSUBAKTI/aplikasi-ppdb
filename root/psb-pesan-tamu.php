<?php include('system/conf/koneksi.php'); ?>
<?php
//penomoran dari satu

$awal=0;
$perintah="SELECT * FROM tpdb_tamu ORDER by id DESC";
$nom="$awal";
$nom2=sprintf("%s",$perintah,$nom);
$query=mysqli_query($koneksi,$nom2);
$pesanmasuk=mysqli_num_rows($query);
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
                <h2 class="page-header">Form Pesan Tamu</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Tamu yang meninggalkan Pesan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                        <th colspan="2">JUMLAH pesan </th>
                                        <th><?php echo $pesanmasuk; ?></th>
                                         <th>Aksi</th>                                      
                                    
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Tamu</th>
                                        <th>Tanggal</th>
                                                                         
                                    </tr>
                                </thead>
                                <tbody>
<?php //ngambil data dan memecahnya ke array 
$no=$awal+1;
while($data=mysqli_fetch_array($query)) {                     
                            
    ?>
                                    <tr class="odd gradeX">

<td><?php echo $no;?></td>
<td><?php echo $data['nama'];?></td>
<td><?php echo $data['tanggal'];?></td>

<td>
<a href="psb-pesan-tamu-hapus.php?tamu=<?php echo $data['id']?>"><i class="fa fa-trash-o fa-fw" alt="delete" title="Delete"></i></a>
<a href="psb-pesan-tamu-detail.php?tamu=<?php echo $data['id']?>"><i  class="fa fa-eye fa-fw" alt="detail" title="View Detail"></i></a>

</td>


                                    </tr>
 <?php $no+=1;  } ?>
                                    </tbody>
                                    </table>
                                    </div>
                                    <div class="panel-footer">
                          Data Tamu
                        </div>
                                    </div>

                                    </div>
                                    </div>