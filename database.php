<?php
$HOST = 'localhost';
$USER = 'root';
$DB = 'itinerary';
$PASS = '123456789';

$conecta = mysqli_connect($HOST, $USER, $PASS, $DB);

if(!$conecta){
  echo "Error: Unble to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno(). PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error(). PHP_EOL;
	exit();
}