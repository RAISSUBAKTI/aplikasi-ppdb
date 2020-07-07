<?php

session_start();
 
if(!isset($_SESSION['admin'])){
	echo '<script language="javascript">document.location="psb-login.php?page=masuk";</script>';
}

?>