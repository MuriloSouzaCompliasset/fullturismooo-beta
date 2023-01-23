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
      <a class="navbar-brand" href="index.php">FullTurismo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="roteiros.php">Roteiros</a>
          </li>
          <li class="nav-item text-end">
            <a class="nav-link active btn btn-primary" aria-current="page" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Fim da Navbar -->

</body>
<!-- informações -->
<div class="conteiner px-5 pxt-5">
  <div class="row ">
    <div class="col text-bg-light p-3 rounded-start-5">
      <div>
        <h4>Nome do roteiro</h4>
        <h6>disgnoasdngoadsnoia</h6>
      </div>
      <div>
        <h4>Descrição</h4>
        <h6>disgnoasdngoadsnoiloghiosanoisjoigydvasdgsjn <br> uisdvadfvasdbasdnd aofnlasnf a aoiuf am,as fasfbja</h6>
      </div>
      <div>
        <h4>Inicio</h4>
        <h6>10/11/10</h6>
        <h4>Termino</h4>
        <h6>10/12/10</h6>
      </div>
      <div>
        <h4>Valor</h4>
        <h6>R$550</h6>
      </div>
      <div class="position-relative">
        <button class="btn btn-primary position-absolute bottom-0 end-0 ">Inscrever</button>
      </div>
    </div>

    <div class="col d-flex align-items-center justify-content-center col text-bg-light p-3 rounded-end-5">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imgs/campos.jpg" class="d-block img-card" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imgs/campos.jpg" class="d-block img-card" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imgs/campos.jpg" class="d-block img-card" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>
<br>
<br><br><br>

</html>