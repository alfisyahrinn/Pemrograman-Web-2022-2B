<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>for</title>
</head>

<body>
  <?php
  echo "mencari suatu huruf vokal dalam suatu kata <br>";
  $jumlah = 0;
  $kata = "belajar php";
  $huruf = "a";
  for ($i = 0; $i < strlen($kata); $i++) {
    if ($udin = substr($kata, $i, 1 == $huruf)) {
      $jumlah++;
      var_dump($udin);
    }
  }
  echo "Jumlah huruf " . $huruf . " dalam kata " . $kata . " : <br>";
  echo $jumlah;
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>"; 
  echo substr($kata, 0, 1) . "<br>";
  echo substr($kata, 1, 1) . "<br>";
  echo substr($kata, 2, 1) . "<br>";
  ?>
</body>

</html>