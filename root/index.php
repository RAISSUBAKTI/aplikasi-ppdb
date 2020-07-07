<?php 
//panggil header, css, navigasi
include('system/conf/sesi.php');
include('system/inc/header.php');
include('system/inc/css.php');
include('system/inc/nav-admin.php');

?>
<?php
//main page
$page=(isset($_GET['page']))?$_GET['page']:"main";
switch($page) {
case'beranda':include"psb-depan.php";break;
case'tambah':include"psb-tambah.php";break;
case'lihat':include"psb-lihat.php";break;
case'diterima':include"psb-siswa-diterima.php";break;
case'ditolak':include"psb-siswa-ditolak.php";break;
case'verifikasi':include"psb-siswa-bverifikasi.php";break;
case'foto':include"psb-lihat-foto.php";break;
case'tambah-kunci':include"psb-kunci.php";break;
case'lihat-kunci':include"psb-lihat-kunci.php";break;
case'sambutan':include"psb-sambutan.php";break;
case'pengaturan-komentar':include"psb-tamu-control.php";break;
case'pengaturan-kunci':include"psb-kunci-kontrol.php";break;
case'tamu':include"psb-pesan-tamu.php";break;
case'tentang-sekolah':include"psb-web-tentang.php";break;
case'visi-misi':include"psb-web-visimisi.php";break;
case'header':include"psb-web-navhead.php";break;
case'fasilitas':include"psb-web-fasilitas.php";break;
case'user':include"psb-user-profile.php";break;
case'keluar':include"psb-logout.php";break;
case 'main':
default:include"psb-depan.php";
}
?>

<?php 
//footer
include('system/inc/footer.php');
?>
