<nav class="navbar navbar-expand-lg bg-light" style="background-color: white;">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/test/" style="color:#505152;"><i class="fas fa-university"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/test/worker.php"><i class="fas fa-users"></i> Worker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/test/client.php"><i class="fas fa-user-tie"></i> Client</a>
        </li>
      </ul>
      <?php 
      if (isset($_SESSION['fullname'])) {
      ?>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"> <i class="fas fa-user"></i> <?= $_SESSION['fullname']; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/test/view/auth/authproces.php?aksi=logout"><i class="fas fa-sign-in-alt"></i> Logout</a>
        </li>
      </ul>
      <?php 
      } else {
      ?>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/test/view/auth/register.php"> <i class="fas fa-user-plus"></i> Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/test/view/auth/login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
        </li>
      </ul>
      <?php 
      }
      ?>
    </div>
  </div>
</nav>
<div class="main p-3">