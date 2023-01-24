<?php if ($niveltela == 0) { ?>

  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand col-1" href="index.php">FullTurismo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active col-2" aria-current="page" href="roteiros.php">Roteiros</a>
          </li>
          <li class="nav-item text-end">
            <?php if ($_SESSION["name"]) { ?>
              <div class="dropdown pb-4">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-sm-inline mx-1"><?php echo substr($_SESSION["name"], 0, 30) ?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="web/user_web.php">Profile</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
                </ul>
              </div>
            <?php } else{ ?>
            <a class="nav-link active btn btn-primary" aria-current="page" href="login.php">Login</a>
            <?php } ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php } ?>

<?php if ($niveltela == 1) { ?>

  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand col-1" href="../index.php">FullTurismo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active col-2" aria-current="page" href="../roteiros.php">Roteiros</a>
          </li>
          <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="d-none d-sm-inline mx-1"><?php echo substr($_SESSION["name"], 0, 30) ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
            </ul>
          </div>
        </ul>
      </div>
    </div>
  </nav>

<?php } ?>