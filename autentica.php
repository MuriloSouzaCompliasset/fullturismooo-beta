<?php
ob_start();
include("database.php");

if (isset($_POST['send'])) {

  if (isset($_POST["email"]) and isset($_POST["password"])) {

    $query = mysqli_query($conecta, "SELECT * FROM users WHERE email ='" . trim($_POST["email"]) . "' AND password ='" . trim($_POST["password"]) . "' LIMIT 1");
    $result = mysqli_fetch_assoc($query);

      if (mysqli_num_rows($query) >= 1 ) {
        
        session_start();

        $_SESSION["name"] = $result['name'];

          if($result['is_admin'] == 1){
            header('location: admin/dashboard.php');
          }else{
            header('location: web/user_web.php?id='. base64_encode($result['id']));
          }
        exit;
      } else {
        echo "erro";
        header('Location: login.php');
        exit;
      }
  }
  header('Location: login.php');
}

session_unset();
session_destroy();
header('location: login.php');
echo "deu ruim";
exit;
