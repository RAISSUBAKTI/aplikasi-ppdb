<?php

session_start();
 
if(!isset($_SESSION['user'])){
	echo '<script language="javascript">alert
	("Untuk melanjutkan Anda harus memiliki sesi");
	 document.location="kunci-masuk";</script>';
}

?>
