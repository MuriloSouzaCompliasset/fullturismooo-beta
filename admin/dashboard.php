<?php
include('../database.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="style/style.css" rel="stylesheet">
</head>

<body>
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
          <a href="dashboard.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
          </a>
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
              <a href="roteiro/roteiro.php" class="nav-link align-middle px-0">
                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Roteiros</span>
              </a>
            </li>
            <li>
              <a href="user/user.php" class="nav-link px-0 align-middle">
                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Usuários</span></a>
            </li>
          </ul>
          <hr>
          <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="d-none d-sm-inline mx-1">Felipe</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
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
                <p class="card-text text-center"> <?php echo str_pad($resultitinerary['TotalItinerary'],2 , 0, STR_PAD_LEFT)?></p>
                <a href="roteiro/roteiro.php" class="btn btn-primary 5">Ver Roteiros</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body text-center">
                <h5 class="card-title text-center">Usuários</h5>
                <p class="card-text text-center">12</p>
                <a href="#" class="btn btn-primary text-center">Ver Usuários</a>
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