<?php
//penomoran dari satu

$awal=0;
include('system/conf/koneksi.php');

$perintah="SELECT*FROM tpdb_kunci ORDER by id DESC";
$nom="$awal";
$nom2=sprintf("%s",$perintah,$awal);
$query=mysqli_query($koneksi,$nom2);

?>
<!-- CEGAH BY PASS PERHALAMAN -->
<?php

 
if(!isset($_SESSION['admin'])){
    echo '<script language="javascript">alert
    ("Anda harus login dulu!");document.location="ssb-login.php?page=masuk";</script>';
}

?>


<div class="row">
                <div class="col-lg-12">
                <h2 class="page-header">Kunci Masuk</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Kunci Untuk Daftar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                               
                                    <tr>
                                        <th>No</th>
                                        <th>Kunci</th>
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
<td><?php echo $data['number_key'];?></td>
<td>
<a href="del-kunci.php?del=<?php echo $data['id']?>"><i class="fa fa-trash-o fa-fw" alt="delete" title="Delete"></i></a>
</td>


                                    </tr>
 <?php $no+=1;  } ?>
                                    </tbody>
                                    </table>
                                    </div>
                                    <div class="panel-footer">
                          Pemain MTs. Ulul Albab
                        </div>
                                    </div>

                                    </div>
                                    </div>

       
            <!-- /.row -->
