<?php
require 'koneksi.php';
// // var_dump($_POST["check_list"]);
// // echo $a[0];
// // var_dump(count($a));
// // $rows = [];
// function asu()
// {
//   $a = $_POST["check_list"];
//   for ($i = 0; $i < count($a); $i++) {
//     $hasil = "'$a[$i]'" . ",";
//     echo $hasil;
//     // return $rows;
//   }
//   // return $hasil;
// }
$h = $_POST["check_list"];
$duu = implode(",", $h);
// echo "SELECT * FROM user WHERE username IN ($duu)";
$result = mysqli_query($koneksi, "SELECT * FROM user WHERE id IN ($duu)");


// // array_map($h);

// $kon = asu();
// // echo $rows;
// // var_dump($rows);

// echo "<br>";

// function query($query)
// {
//   global $koneksi;
//   $result = mysqli_query($koneksi, $query);
//   $rows = [];
//   while ($row = mysqli_fetch_assoc($result)) {
//     $rows[] = $row;
//   }
//   return $rows;
// };




function loopValues()
{
  $r = [];
  foreach ($_POST['check_list'] as $check) {
    // $c = $check . 'e';
    $u = "'$check'" . ",";
    // echo $check . ',';
    // $r[] = $c;
    // echo $u;
  }
  return $u;
}
// var_dump(loopValues());
// echo loopValues();
// echo "SELECT * FROM user WHERE username IN ($kon)";
// var_dump($_POST['check_list']);
// if (!empty($_POST['check_list'])) {
//   foreach ($_POST['check_list'] as $check) {
//     var_dump($check);
//   }
//   // $reuslt = mysqli_query($koneksi, "SELECT * FROM user WHERE username IN
//   // ('$check' '')");
//   // $row = mysqli_fetch_assoc($reuslt);
//   // echo $row["username"];
// } else {
//   echo "sotoo";
// }
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
    <table class="table table-striped">
      <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>
      </tr>
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?= $row["id"]; ?></td>
          <td><?= $row["username"]; ?></td>
          <td><?= $row["password"]; ?></td>
        </tr>
      <?php endwhile ?>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>
