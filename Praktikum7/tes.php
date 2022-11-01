<?php
require 'koneksi.php';
$reuslt = mysqli_query($koneksi, "SELECT * FROM user");
$banyak = mysqli_num_rows($reuslt);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <form action="proses.php" method="post">
      <button type="submit" name="print" class="btn btn-success my-3 px-3">Print</button>
      <table class="table table-striped">
        <tr>
          <th>username</th>
          <th>password</th>
          <th>aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($reuslt)) : ?>
          <tr>
            <td><?= $row["username"]; ?></td>
            <td><?= $row["password"]; ?></td>
            <td>
              <label>
                <input class="mx-3" type="checkbox" name="check_list[]" value="<?= $row["id"]; ?>"><?= $row["id"]; ?>
              </label>
            </td>
          </tr>
        <?php endwhile ?>
      </table>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>
