<?php

include('../../database.php');

if(empty($_GET["id"])) {
	header('Location: ./');
	exit;
}

$query = mysqli_query($conecta, "DELETE FROM users WHERE id = " . base64_decode($_GET["id"]));

header('Location: ./user.php');




?>