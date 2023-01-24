<?php

$niveltela=1;
session_start();


if (!isset($_SESSION['name'])) {
  include('../verifica.php');
}

include('../database.php');

$decode = base64_decode($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fullturismo</title>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2b0483360e.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="../style/style.css" rel="stylesheet">
</head>

<body>

  <!-- NavBar -->
<?php include('../partions/navbar.php') ?>
  <!-- Fim da NavBar -->

<?php   

  $buscaitinerary = mysqli_query($conecta, "SELECT i.* FROM users_itineraryes ui INNER JOIN itinerarys i ON i.id = ui.id_itinerary WHERE ui.id_user = ".$decode);
  var_dump($buscaitinerary);
  ini_set('display_errors', 1);
  if($buscaitinerary && mysqli_num_rows($buscaitinerary) >= 1){
    while($resultitinerary = mysqli_fetch_assoc($buscaitinerary)){
?>


roteiro <br>
<?php echo $resultitinerary['name'] ?>
<br>


<?php } }?>

  
</body>

</html>