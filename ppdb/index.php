
<?php
//panggil file css dan head yang terpisah
include ('system/inc/head.php');
include ('system/inc/css.php');
include ('system/inc/navi.php');
?>
<?php
//main page	
$page=(isset($_GET['page']))?$_GET['page']:"main";
switch($page) {
case'home':include"psb-home.php";break;
case'kunci':include"psb-kunci.php";break;

case 'main':
default:include"psb-home.php";
	
}
?>
<?php
//footer
include('system/inc/footer.php')
?>

