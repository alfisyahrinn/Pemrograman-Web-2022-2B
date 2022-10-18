<?php
//menagil inputan
$keyword = $_POST["keyword"];
$cari = $_POST["cari"];
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "meden") or die("Koneksi Gagal");
//cari data
$result = mysqli_query($koneksi, "SELECT * FROM bukutamu WHERE $keyword LIKE '%$cari%'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Joni Perpustakaan</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- Style -->
  <link rel="stylesheet" href="keren/index.css">
</head>

<body style="height: 100vh;">
  <!-- End print -->
  <div class="d-flex">
    <div class="container">
      <h1 class="my-3">Buku Tamu</h1>
      <table class="table table-striped table-hover">
        <tr class="table-warning">
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Komentar</th>
        </tr>
        <?php
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["komentar"] ?></td>
          </tr>
        <?php
          $i++;
        endwhile ?>
      </table>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>