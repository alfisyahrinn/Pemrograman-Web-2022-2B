<nav class="navbar navbar-expand-lg navbar-dark bg-primary container-fluid sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="."> <img width="40" src="src/img/kupi.png" alt=""> DECOFEE</a>
    <div class="position-absolute" style="right:0px; margin-right: 2rem;">
      <a class="nav-link link-light dropdown-toggle opacity-50" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?= $row["username"]; ?>
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="proses/logout.php">Logout</a></li>
      </ul>
      </li>
    </div>

  </div>
</nav>