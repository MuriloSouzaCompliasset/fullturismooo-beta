<?php

$niveltela = 1;
session_start();

include('../../database.php');

if (isset($_POST['send'])) {

  if (base64_decode($_GET['ref']) == 'new') {

    $prep = mysqli_prepare($conecta, "INSERT INTO users (name, email, password) VALUES (?, ?, ?);");
    $prep->bind_param("sss", trim($_POST['name']), trim($_POST['email']), trim($_POST['password']));
    $prep->execute();
  } else {
    $prep = mysqli_prepare($conecta, "UPDATE users SET name=?, email=?, password=? WHERE id = " . base64_decode($_GET["id"]));
    $prep->bind_param("sss", trim($_POST['name']), trim($_POST['email']), trim($_POST['password']));
    $prep->execute();
    echo ('alt');
  }
  header('Location: ./user.php');
}
if (!empty($_GET["id"])) {
  $select = mysqli_query($conecta, "SELECT * FROM users WHERE id = " . base64_decode($_GET["id"]));
  if (mysqli_num_rows($select) == 0) {
    header('Location: user.php');
    exit;
  } else {
    $result = mysqli_fetch_assoc($select);
  }
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
      <?php include('../sidebar.php') ?>
      <div class="col py-3">

        <!-- Valor dentro da sidebra -->
        <a href="user.php" class="btn btn-danger">Cancelar</a>

        <form class="row g-3 mt-5" method="post">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome do Usu??rio</label>
            <input value="<?php echo $result["name"] ?>" type="text" class="form-control" name="name">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Email</label>
            <input value="<?php echo $result["email"] ?>" type="text" class="form-control" name="email">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Senha</label>
            <input value="<?php echo $result["password"] ?>" type="text" class="form-control" name="password">
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Foto</label>
            <input type="file" class="form-control" id="inputAddress2">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Valor Estimado</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary" name="send">Criar</button>
          </div>
        </form>

        <!-- Fim do valor dentro da sidebra -->

      </div>
    </div>
  </div>
</body>

</html>