<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemakaian Variable</title>
</head>

<body>
  <?php
  $jalan = "Medan - B.aceh";
  $noRumah = 29;
  $blok = "4c";
  $jumlahPenghuni = 3;
  echo "hasil varible variable jalan + variable no rumah adalah :";
  echo $alamat = $jalan . $noRumah;
  echo "<br>";
  echo "hasil varible variable noRumah + variable Jumlah penghuni adalah :";
  echo $hasil = $noRumah +  $jumlahPenghuni;
  echo "<br>";
  echo "hasil varible variable blok + variable noRumah adalah :";
  echo $hasil = $blok + $noRumah;
  ?>
</body>

</html>