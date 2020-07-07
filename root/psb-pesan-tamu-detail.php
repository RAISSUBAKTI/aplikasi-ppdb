 <?php

//This code created by blues
//if you have any question
//contact me : rais_subakti@yahoo.com
include('system/conf/koneksi.php');

$detail=mysqli_escape_string($koneksi,$_GET['tamu']);
$query="select * from tpdb_tamu where id='$detail'";
$perintah=mysqli_query ($koneksi,$query) 
or die ("Gagal melakukan koneksi".mysqli_error());
$data=mysqli_fetch_array($perintah);
$id=$data['id'];
$nama=$data['nama'];
$email=$data['email'];
$judul=$data['judul'];
$pesan=$data['pesan'];
$tanggal=$data['tanggal'];
$ip=$data['ip'];
?>
<?php 
//panggil header, css, navigasi
include('system/inc/header.php');
include('system/inc/css.php');
include('system/conf/sesi.php');


?>
<body>

    <div id="wrapper">

    
       <!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="logo navbar-btn pull-left" href="/drupal/" title="Home">
<img src="http://localhost/drupal/sites/all/themes/bootstrap_subtheme/logo.png" alt="Home"></a>
<a class="navbar-brand" href="home">blues</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
                              
<!-- /.dropdown -->
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu dropdown-user">
<li><a href="index.php?page=user"><i class="fa fa-user fa-fw"></i> User Profile</a>
</li>                       
                      
<li class="divider"></li>
<li><a href="index.php?page=keluar"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>
<!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
<div class="sidebar-nav navbar-collapse">
<ul class="nav" id="side-menu">                   
<li>
<a href="index.php?page=beranda"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
</li>
<li>
<a href="#"><i class="fa fa-user fa-fw"></i><span class="fa arrow"></span> Data Siswa</a>
<ul class="nav nav-second-level">
<li><a href="index.php?page=tambah">Tambah Siswa</a></li>
<li><a href="index.php?page=lihat">Semua Siswa</a></li>
<li><a href="index.php?page=diterima">Diterima</a></li>
<li><a href="index.php?page=ditolak">Ditolak</a></li>
<li><a href="index.php?page=verifikasi">Belum Diverifikasi</a></li>
<li><a href="index.php?page=foto">Foto Siswa</a></li>
</ul>
<!-- /.nav-second-level -->
</li>
<li><a href="#"><i class="fa fa-lock fa-fw"></i> <span class="fa arrow"></span>Kunci</a>
<ul class="nav nav-second-level">
<li><a href="index.php?page=tambah-kunci">Tambah Kunci</a></li>
<li><a href="index.php?page=lihat-kunci">Lihat Kunci</a></li>
<li><a href="index.php?page=pengaturan-kunci">Pengaturan Kunci</a></li>
                                
                    </ul>
                        </li>
<li>
<a href="#"><i class="fa fa-book fa-fw"></i><span class="fa arrow"></span> Buku Tamu</a>
<ul class="nav nav-second-level">
<li><a href="index.php?page=tamu">Komentar</a></li>
<li><a href="index.php?page=pengaturan-komentar">Pengaturan Komentar</a></li>
</ul>
</li>
<li>
<a href="#"><i class="fa fa-gear fa-fw"></i> <span class="fa arrow"></span>Pengaturan</a>
<ul class="nav nav-second-level">
<li><a href="index.php?page=#">Kunci</a></li>

</ul>
</li>
</ul>

                       
                       
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<br/>
           <div id="page-wrapper">

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
                    <td>Nama</td>
                    <td><?php echo"$nama";?></td>
                    </tr>

                    <tr>
                    <td>Email</td>
                    <td><?php echo"$email";?></td>
                    </tr>
                    <tr>
                    <td>Judul Pesan</td>
                    <td><?php echo "$judul";?></td>
                    </tr>

                    <tr>
                    <td>Pesan</td>
                    <td><?php echo"$pesan";?></td>
                    </tr>

                    <tr>
                    <td>Tanggal</td>
                    <td><?php echo "$tanggal";?></td>
                    </tr>

                    <tr>
                    <td>IP Address</td>
                    <td><?php echo "$ip";?></td>
                    </tr>
                                   
                </tbody>
                                </table>
        <p class="page-header"><a href="index.php?page=tamu"><button class="btn btn-default">Kembali</button></a> | <a href="psb-pesan-tamu-hapus.php?tamu=<?php echo "$id"; ?>"<button class="btn btn-default">Hapus</button></a> </p>


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


 <li>
                   