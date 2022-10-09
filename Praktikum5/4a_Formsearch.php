<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Buku Tamu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
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
        <h1>Meden Search 🔍</h1>
      </div>
    </div>
  </div>
  <!-- End Hero -->

  <!-- Form -->
  <div class="container formku">
    <form action="4b_cari.php" method="post">
      <div class="row">
        <div class="col-md-8 offset-2 d-flex">
          <select name="keyword" class="form-select w-25 mx-2" id="keyword">
            <option value="nama" selected>nama</option>
            <option value="email">email</option>
          </select>
          <input type="text" name="cari" class="form-control" style="height: 50px;" id="cari">
          <button class="btn btn-primary mx-3" type="submit" name="simpan">simpan</button>
        </div>
      </div>
  </div>
  </form>
  </div>
  <!-- End Form -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>