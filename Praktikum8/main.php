<?php
// session_start();
require 'proses/koneksi.php';

if (empty($_SESSION["usernameDecafe"])) {
  header('location:login');
}

$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$_SESSION[usernameDecafe]'");
$row = mysqli_fetch_assoc($result);
// var_dump($row);


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DeCafe</title>
  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="src/css/style.css">
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body>
  <!-- icon -->
  <?php include 'widget/icon.php' ?>
  <!-- end icon -->

  <!-- navbar -->
  <?php include 'widget/navbar.php' ?>
  <!-- end navbar -->

  <!-- menu -->

  <div class="px-3">
    <div class="row">
      <!-- sidebar -->
      <?php include 'widget/sidebar.php' ?>
      <!-- end sidebar -->
      <div class="col-lg-9 mt-2">
        <!-- content -->
        <?php
        include $page;
        ?>
        <!-- End content -->
      </div>
    </div>
  </div>
  <!-- end Menu -->

  <!-- footer -->
  <!-- <?php include 'widget/footer.php' ?> -->
  <!-- end footer -->






  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>

</body>

</html>