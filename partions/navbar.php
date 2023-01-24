<?php if ($niveltela == 0) { ?>

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

<?php } ?>

<?php if ($niveltela == 1) { ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand col-1" href="#">FullTurismo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active col-2" aria-current="page" href="../roteiros.php">Roteiros</a>
        </li>
        <li class="nav-item text-end">
          <a class="nav-link active btn btn-primary" aria-current="page" href="../login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php } ?>