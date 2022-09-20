<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  $x = 2;
  switch ($x) {
    case 1:
      echo 'nomor 1';
      break;
    case 2:
      echo 'nomor 2';
      break;
    case 3:
      echo 'nomor 3';
      break;

    default:
      echo "bukan nomor antara 1-3";
      break;
  }
  ?>
</body>

</html>