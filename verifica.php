<?php
  ob_start();
  session_start();

  if(isset($_SESSION["name"])){
	echo "<script>window.location='index.php';</script>";
	exit;
  }
?>