<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login PSB MTs. Ulul Albab</title>
<?php 
//panggil header, css, navigasi

include('system/inc/css.php');

?>

<body>

    <div class="container">
    <?php 
$page=(isset($_GET['page']))?$_GET['page']:"main";
switch($page) {
    case 'masuk':include"psb-sign-in.php";break;
    default:include"psb-sign-in.php";
}
    ?>

        </div>


<?php 
//footer
include('system/inc/footer.php');
?>