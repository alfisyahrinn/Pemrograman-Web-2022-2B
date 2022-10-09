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
        <h1>Buku tamu Database <br>
          Mysql Mantap👍</h1>
      </div>
    </div>
  </div>
  <!-- End Hero -->

  <!-- Form -->
  <div class="container formku">
    <form action="3b_addForm.php" method="post">
      <div class="row">
        <div class="col-md-4 offset-2">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" id="nama" maxlength="50">
        </div>
        <div class="col-md-4">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" maxlength="35">
        </div>
        <div class="col-md-8 offset-2 mt-1">
          <label for="komentar" class="form-label">Komentar</label>
          <textarea name="komentar" id="komentar" cols="89" rows="5"></textarea>
          <style>
            textarea {
              border: none;
              background-color: #fafafa;
              border-radius: 10px;
            }
          </style>
        </div>
      </div>

      <button class="btn btn-primary offset-2 mt-3" type="submit" name="simpan">simpan</button>
      <input type="reset" value="Reset" class="btn btn-warning mt-3 mx-2">

    </form>
  </div>
  <!-- End Form -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>