<nav id="header" class="navbar navbar-expand-lg bg-dark fixed-top py-4 px-2 p-md-4">
  <div class="container-fluid ">
    <?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

    <a class="navbar-brand" href="./index.php"><img style="width: 150px" src="images/logo-white.png" alt="image"></a>

    <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
      <ion-icon name="menu-outline" style="font-size: 30px;"></ion-icon>
    </button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav align-items-center justify-content-end align-items-center flex-grow-1 ">

          <li class="nav-item">
            <a class="nav-link me-md-4 <?= $page === 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-md-4 <?= $page === 'about.php' ? 'active' : '' ?>" href="about.php">O nas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-md-4 <?= $page === 'dzialki.php' ? 'active' : '' ?>" href="dzialki.php">Działki</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-md-4 <?= $page === 'domy.php' ? 'active' : '' ?>" href="domy.php">Domy</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-md-4 <?= $page === 'mieszkania.php' ? 'active' : '' ?>"
              href="mieszkania.php">Mieszkania</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-md-4 <?= $page === 'nieruchomosci.php' ? 'active' : '' ?>"
              href="nieruchomosci.php">Nieruchomości</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-md-4 <?= $page === 'kontakt.php' ? 'active' : '' ?>" href="kontakt.php">Kontakt</a>
          </li>
        </ul>

      </div>
    </div>


  </div>
</nav>