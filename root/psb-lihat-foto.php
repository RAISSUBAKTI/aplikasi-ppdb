<?php
//penomoran dari satu

$awal=0;
include('system/conf/koneksi.php');

$perintah="SELECT * FROM tpdb_daftar ORDER by id DESC";
$nom="$awal";
$nom2=sprintf("%s",$perintah,$awal);
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
                <h2 class="page-header">Foto siswa</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Foto siswa MTs. Ulul Albab
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                        <th colspan="2">JUMLAH siswa </th>
                                        <th colspan="3"><?php echo $jumlah_siswa; ?></th>
                                                                               
                                    
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama siswa</th>
                                        <th>Foto</th>
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
<td><img src="../ppdb/gambar/<?php echo $data['foto']; ?>" width="60" height="70"/></td>


<td>
<a href="psb-detail.php?detail=<?php echo $data['id']?>"><i  class="fa fa-eye fa-fw" alt="detail" title="View Detail"></i></a>
<a href="edit-<?php echo $data['id']?>"><i class="fa fa-edit fa-fw" alt="edit" title="Edit"></i></a>
<a href="del.php?del=<?php echo $data['id']?>"><i class="fa fa-trash-o fa-fw" alt="delete" title="Delete"></i></a>
</td>


                                    </tr>
 <?php $no+=1;  } ?>
                                    </tbody>
                                    </table>
                                    </div>
                                    <div class="panel-footer">
                          siswa MTs. Ulul Albab
                        </div>
                                    </div>

                                    </div>
                                    </div>

       
            <!-- /.row -->
