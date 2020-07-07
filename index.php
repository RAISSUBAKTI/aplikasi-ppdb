<?php
//properti halaman utama PPDB atau Website
//ada properi dan query data yang dijalankan pada navigasi
include('mainweb/head.php');
include('mainweb/css.php');
include('mainweb/navi.php');
?>

<?php
//single page main

$main=(isset($_GET['halaman']))?$_GET['halaman']:"main";
switch ($main) {
	case 'home':include"mainweb/home.php";break;
	//tentukan case dari setiap menu kemudian panggil halamannya
	case 'kontak':include"mainweb/kontak.php";break;
	case 'sample':include"mainweb/sample.php";break;
	case'main':
	default:include"mainweb/home.php";
		
		
}
?>
<?php
include('mainweb/footer.php');
?>