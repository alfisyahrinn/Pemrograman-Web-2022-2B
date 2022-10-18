<?php
if (isset($_POST["register"])) {
  require "koneksi.php";
  $username = $_POST["username"];
  $password = $_POST["password"];

  //encryp
  $passwordEncrypt = md5($password);
  //cek apakah ada username yang sama
  $queryCek = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");
  $tes = mysqli_fetch_assoc($queryCek);

  if ($tes) {
    echo "
    <script>
    alert('Username telah di gunakan');
    document.location='FormRegister.php';
    </script>
    ";
  } else {
    $query = mysqli_query($koneksi, "INSERT INTO user VALUES
    ('$username', '$passwordEncrypt');");
    if ($query) {
      echo "
            <script>
            alert('Data Berhahsil di tambahkan')
            document.location='FormRegister.php';
            </script>
            ";
    } else {
      echo "
            <script>
            alert('Gagal menambahkan data')
            document.location='FormRegister.php';
            </script>
            ";
    }
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Buku Tamu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style copy.css">
</head>

<body>
  <!-- navbar -->
  <div class="container mt-2">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">meden12</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-1">
              <a class="nav-link" href="#">work</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link" href="#">service</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link" href="#">faq</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link" href="#">contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- End navbar -->

  <!-- Hero -->
  <div class="container hero">
    <div class="row">
      <div class="col-12 offset-2">
        <h1>Register Your Account <br>
          CFC Mantap👍</h1>
      </div>
    </div>
  </div>
  <!-- End Hero -->

  <!-- Form -->
  <div class="container formku">
    <form action="" method="post">
      <div class="row">
        <div class="col-md-4 offset-2">
          <label for="Username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="Username" maxlength="50" required>
        </div>
        <div class="col-md-4">
          <label for="password" class="form-label">password</label>
          <input type="password" name="password" class="form-control" id="password" maxlength="35" required>
        </div>
      </div>

      <button class="btn btn-primary offset-2 mt-3" type="submit" name="register">register</button>
      <a class="btn btn-success mt-3" href="1formlogin.php">Login</a>

    </form>
  </div>
  <!-- End Form -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>