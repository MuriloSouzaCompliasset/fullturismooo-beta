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
  <link href="../style/style.css" rel="stylesheet">
</head>

<body>

  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand col-1" href="#">FullTurismo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active col-2" aria-current="page" href="roteiros.php">Roteiros</a>
          </li>
          <li class="nav-item text-end">
            <a class="nav-link active btn btn-primary" aria-current="page" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Fim da NavBar -->

  <!-- banner -->
  <div class="container-fluid bg-white text-center" style="height: 400px;">
      <h1 class=" d-flex justify-content-center" style="padding-top: 10rem;" >O Mundo em só clique</h1> 
  </div>
  <!-- Fim do Banner -->

  <!-- Cards de roteiros -->

  <div class="row row-cols-1 row-cols-md-3 g-4 pt-5 px-5  ">
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="../imgs/campos.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="roteiros_show.php" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col ">
      <div class="card" style="width: 18rem;">
        <img src="../imgs/campos.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="roteiros_show.php" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="../imgs/campos.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="roteiros_show.php" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>