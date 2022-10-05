<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <style>
    .ini {
      display: flex;
      height: 100vh;
      justify-content: center;
      align-items: center;

    }

    ul,
    li {
      text-decoration: none;
      list-style-type: none;
      list-style: none;
      margin-top: 10px;
    }
  </style>
  <div class="ini">
    <!-- <input type="checkbox">
    <input type="color">
    <input type="date">
    <input type="datetime-local">
    <input type="email">
    <input type="month">
    <input type="number">
    <input type="password">
    <input type="radio">
    <input type="range">
    <input type="reset">
    <input type="search">
    <input type="tel">
    <input type="text">
    <input type="time">
    <input type="url">
    <input type="week"> -->
    <form action="proses.php" method="get">
      <ul>
        <li>
          <label>
            <input type="checkbox" name="1" value="ronaldo">ronaldo
            <input type="checkbox" name="2" value="messi">messi
            <input type="checkbox" name="3" value="hazard">hazard
          </label>
        </li>
        <li>
          <label>
            Warna :
            <input type="color" name="color">
          </label>
        </li>
        <li>
          <label>
            date
            <input type="date" name="date">
          </label>
        </li>
        <li>
          <label>
            datetime
            <input type="datetime-local" name="datetime-local">
          </label>
        </li>
        <li>
          <label>
            email
            <input type="email" name="email">
          </label>
        </li>
        <li>
          <label>
            month
            <input type="month" name="month">
          </label>
        </li>
        <li>
          <label>
            number
            <input type="number" name="number">
          </label>
        </li>
        <li>
          <label>
            password
            <input type="password" name="password">
          </label>
        </li>
        <li>
          <input type="radio" name="radio" value="Pria" />
          <label>Pria</label>
          <input type="radio" name="radio" value="Wanita" />
          <label>Wanita</label>
          <input type="radio" name="radio" value="rahasia" checked style="display: none;" />
        </li>
        <li>
          <label>
            range
            <input type="range" name="range">
          </label>
        </li>
        <li>
          <label>
            search
            <input type="search" name="search">
          </label>
        </li>
        <li>
          <label>
            tel
            <input type="tel" name="tel">
          </label>
        </li>
        <li>
          <label>
            text
            <input type="text" name="text">
          </label>
        </li>
        <li>
          <label>
            time
            <input type="time" name="time">
          </label>
        </li>
        <li>
          <label>
            url
            <input type="url" name="url">
          </label>
        </li>
        <li>
          <label>
            week
            <input type="week" name="week">
          </label>
        </li>
        <li>
          <label for="inputState" class="form-label">Status</label>
          <select id="inputState" name="select" class="form-select">
            <option value="Mahasiswa / Pelajar" selected>Mahasiswa / Pelajar</option>
            <option value="Pns">Pns</option>
            <option value="Wirausaha">Wirausaha</option>
            <option value="guru">Guru</option>
            <option value="Presiden">Presiden</option>
          </select>
        </li>
      </ul>
      <button type="submit" name="kirim">kirim</button>
      <input type="reset" value="reset">
    </form>

  </div>

  <!-- End Form -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>