<?php
$niveltela = 1;
session_start();

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
      <?php include('../sidebar.php') ?>
      <div class="col py-3">
        <!-- Valor dentro da sidebra -->
        <form class=" g-3 mt-5" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $result["id"] ?>">
          
          <div class="row">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nome do Roteiro</label>
              <input value="<?php echo $result["name"] ?>" type="text" class="form-control" name="name">
            </div>
            <div class="col-md-6">
              <label class="form-label">Foto</label>
              <input type="file" class="form-control" name="img" id="imgNew" accept="image/jpeg, image/png, image/jpg">
              <img id="imgShow" style="max-width: 500px;">
              <input type="hidden" class="form-control" name="oldImg" value="<?php echo $result["img"] ?>">
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Descrição Resumida</label>
              <input class="form-control" maxlength="300" name="description"><?php echo $result["description"] ?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Descrição</label>
              <textarea class="form-control" maxlength="300" name="description"><?php echo $result["description"] ?></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-2">
              <label for="inputAddress" class="form-label">Data de Início</label>
              <input type="date" class="form-control" name="date_start">
            </div>
            <div class="col-2">
              <label for="inputAddress" class="form-label">Data Final</label>
              <input type="date" class="form-control" name="date_end">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Cidade</label>
              <select id="inputState" class="form-select">
                <option selected>SP</option>
                <option>AM</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Estado</label>
              <select id="inputState" class="form-select">
                <option selected>SP</option>
                <option>AM</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Valor Estimado</label>
              <input type="text" class="form-control" name="value">
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-md-4 d-flex align-items-sm-center mt-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Lançamento
                </label>
              </div>
            </div>
          </div>

          <div class="col-12 mt-5">
            <a href="roteiro.php" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary" name="send">Criar</button>
          </div>
        </form>

        <!-- Fim do valor dentro da sidebra -->

      </div>
    </div>
  </div>
</body>

<script>
  imgNew.onchange = evt => {
    var output = document.getElementById('imgShow');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src)
    }
  };
</script>

</html>