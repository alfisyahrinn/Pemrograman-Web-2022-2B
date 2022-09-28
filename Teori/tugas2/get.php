<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Get</title>
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
        <h1>Ayo gabung bersama <br>
          kami meden 👋</h1>
      </div>
    </div>
  </div>
  <!-- End Hero -->

  <!-- Form -->
  <div class="container formku">
    <form action="getku.php" method="get">
      <div class="row">
        <div class="col-md-4 offset-2">
          <label for="name" class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" id="nama">
        </div>
        <div class="col-md-4">
          <label for="name" class="form-label">No hp</label>
          <input type="number" name="noHp" class="form-control" id="nohp">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-md-4 offset-2">
          <div class="col-half">
            <h4 class="form-label">Status</h4>
            <div class="input-group">
              <input id="status-Dipinjam" type="radio" name="status" value="Pria" />
              <label class="ms-1" for="status-Pria">Pria</label>
              <input class="ms-3" id="status-Wanita" type="radio" name="status" value="Wanita" />
              <label class="ms-1" for="status-Wanita">Wanita</label>
              <input style="display: none;" class="ms-3" id="status-Wanita" type="radio" name="status" value="rahasia" checked />
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-md-4 offset-2">
          <label for="date" class="form-label">Tanggal lahir</label>
          <input type="date" name="tgl" class="form-control" id="date">
        </div>
        <div class="col-md-4">
          <label for="pw" class="form-label">Password</label>
          <input type="password" name="pw" class="form-control" id="pw">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-md-4 offset-2">
          <label for="inputState" class="form-label">Status</label>
          <select id="inputState" name="alfi" class="form-select">
            <option value="Mahasiswa / Pelajar" selected>Mahasiswa / Pelajar</option>
            <option value="Pns">Pns</option>
            <option value="Wirausaha">Wirausaha</option>
            <option value="guru">Guru</option>
            <option value="Presiden">Presiden</option>
          </select>
        </div>
      </div>

      <div class="row col-8 offset-2 mt-3">
        <label class="d-flex">
          <input class="me-2" type="checkbox" name="acc">
          apakah menerima persyaratan
        </label>
      </div>
      <button class="btn btn-primary offset-2 mt-3" type="submit" name="kirim">Kirim</button>

    </form>
  </div>
  <!-- End Form -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>