<?php

$niveltela = 1;
session_start();


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
        <a href="new_roteiro.php?ref=<?php echo base64_encode('new'); ?>" class="btn btn-primary">Criar</a>
        <table class="table mt-5">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Descrição</th>
              <th scope="col">Opções</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include('../../database.php');
            $query = mysqli_query($conecta, "SELECT * FROM itinerarys ORDER BY name");
            if (mysqli_num_rows($query) >= 1) {
              while ($result = mysqli_fetch_assoc($query)) {
            ?>

                <tr>
                  <td><?php echo $result['name'] ?></td>
                  <td><?php echo $result['description'] ?></td>
                  <td>
                    <a href="new_roteiro.php?id=<?php echo base64_encode($result['id']) ?>" class="btn btn-primary">Alterar</a>
                    <a href='javascript:void(0)' onclick="if (confirm('Confirma exclusão do item?')) { location.href='destroy.php?id=<?php echo base64_encode($result['id']) ?>' }" class="btn btn-danger">Remover</a>
                  </td>
                </tr>
              <?php } ?>
            <?php } ?>
          </tbody>
        </table>

        <!-- Fim do valor dentro da sidebra -->
      </div>
    </div>
  </div>
</body>

</html>