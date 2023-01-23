<?php
include('../database.php');
$niveltela = 0;
session_start();

if (!isset($_SESSION['name'])) {
  include('verifica.php');
}

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="style/style.css" rel="stylesheet">
</head>

<body>
  <div class="container-fluid">
    <div class="row flex-nowrap">

      <?php include('sidebar.php') ?>

      <div class="col py-3">
        <!-- Valor dentro da sidebra -->

        <div class="row pt-5">
          <div class="col-sm-3 mb-3 mb-sm-0">
            <div class="card text-center">
              <div class="card-body text-center">
                <h5 class="card-title text-center">Roteiros</h5>
                <?php
                $queryitinerary = mysqli_query($conecta, "SELECT COUNT(id) AS TotalItinerary FROM itinerarys");
                $resultitinerary = mysqli_fetch_assoc($queryitinerary);
                ?>
                <p class="card-text text-center"> <?php echo str_pad($resultitinerary['TotalItinerary'], 2, 0, STR_PAD_LEFT) ?></p>
                <a href="roteiro/roteiro.php" class="btn btn-primary 5">Ver Roteiros</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body text-center">
                <h5 class="card-title text-center">Usuários</h5>
                <?php
                $queryuser = mysqli_query($conecta, "SELECT COUNT(id) AS TotalUser FROM users");
                $resultuser = mysqli_fetch_assoc($queryuser);
                ?>
                <p class="card-text text-center"> <?php echo str_pad($resultuser['TotalUser'], 2, 0, STR_PAD_LEFT) ?></p>
                <a href="user/user.php" class="btn btn-primary text-center">Ver Usuários</a>
              </div>
            </div>
          </div>
        </div>


        <!-- Fim do valor dentro da sidebra -->

      </div>
    </div>
  </div>
</body>

</html>