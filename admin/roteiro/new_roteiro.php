<?php

include('../../database.php');
if (isset($_POST['send'])) {

  if ($_FILES["img"]["size"] > 0) {
    $extendArquivo = end(explode('.', $_FILES["img"]["name"]));
    $nameArquivo = "photo/" . sha1(time() . $_FILES["img"]["name"]) . "." . $extendArquivo;

    move_uploaded_file($_FILES["img"]["tmp_name"], $nameArquivo);
  } else {
    $nameArquivo = $_POST["oldImg"];
  }

  if (base64_decode($_GET['ref']) == 'new') {

    $prep = mysqli_prepare($conecta, "INSERT INTO itinerarys (name, description, img) VALUES (?, ?, ?);");
    $prep->bind_param("sss", trim($_POST['name']), trim($_POST['description']), $nameArquivo);

    $prep->execute();
  } else {
    $prep = mysqli_prepare($conecta, "UPDATE itinerarys SET name=?, description=?, img=? WHERE id = " . base64_decode($_GET["id"]));
    $prep->bind_param("sss", trim($_POST['name']), trim($_POST['description']), $nameArquivo);
    $prep->execute();
  }
  header('Location: ./roteiro.php');
}
if (!empty($_GET["id"])) {
  $select = mysqli_query($conecta, "SELECT * FROM itinerarys WHERE id = " . base64_decode($_GET["id"]));
  if (mysqli_num_rows($select) == 0) {
    header('Location: roteiros.php');
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
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
          <a href="dashboard.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
          </a>
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
              <a href="roteiro.php" class="nav-link align-middle px-0">
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
        <a href="roteiro.php" class="btn btn-danger">Cancelar</a>
        <form class="row g-3 mt-5" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $result["id"] ?>">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome do Roteiro</label>
            <input value="<?php echo $result["name"] ?>" type="txt" class="form-control" name="name">

          </div>
          <div class="col-3">
            <label for="inputAddress" class="form-label">Data de Início</label>
            <input type="date" class="form-control" name="date_start">
          </div>
          <div class="col-3">
            <label for="inputAddress" class="form-label">Data Final</label>
            <input type="date" class="form-control" name="date_end">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Descrição</label>
            <input value="<?php echo $result["description"] ?>" type="txt" class="form-control" name="description">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
              <option selected>SP</option>
              <option>AM</option>
            </select>
          </div>
          <div class="col-12">
            <label class="form-label">Foto</label>
            <input type="file" class="form-control" name="img">
            <input type="hidden" class="form-control" name="oldImg" value="<?php echo $result["img"] ?>">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Valor Estimado</label>
            <input type="text" class="form-control" name="value">
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