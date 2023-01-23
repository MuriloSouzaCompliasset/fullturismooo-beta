<?php

$niveltela = 1;
session_start();

include('../../database.php');

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
      <?php include('../sidebar.php') ?>
      <div class="col py-3">

        <!-- Valor dentro da sidebra -->

        <?php
         $buscaRoteiro = mysqli_query($conecta, "SELECT * FROM itinerarys WHERE id=" . base64_decode($_GET['id']));
         // var_dump(($_GET['ref']));
         while ($resultRoteiro = mysqli_fetch_assoc($buscaRoteiro)) {
        ?>
        <div class="card">
          <div>
            <div>
              <h4>Nome do Roteiro</h4>
              <?php echo $resultRoteiro['name'] ?>
              <br>
            </div>
          </div>
        </div>
        <?php } ?>
        <!-- Fim do valor dentro da sidebra -->
      </div>
    </div>
  </div>
</body>

</html>