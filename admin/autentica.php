<?php
ob_start();
include("../database.php");

if (isset($_POST['send'])) {

  if (isset($_POST["email"]) and isset($_POST["password"])) {

    $query = mysqli_query($conecta, "SELECT * FROM users WHERE email ='" . trim($_POST["email"]) . "' AND password ='" . trim($_POST["password"]) . "' LIMIT 1");

    if (mysqli_num_rows($query) >= 1) {

      session_start();

      $result = mysqli_fetch_assoc($query);

      $_SESSION["name"] = $result['name'];

      header('location: dashboard.php');
      exit;
    } else {
      echo"erro";
      header('Location: index.php');
      exit;
    }
  }
  header('Location: index.php');
}

session_unset();
session_destroy();
header('location: index.php');
echo "deu ruim";
exit;
