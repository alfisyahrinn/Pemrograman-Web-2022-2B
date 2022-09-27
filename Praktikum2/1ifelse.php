<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- jika hari ini selasa bulan 9 dan jam 9 -->
  <?php
  date_default_timezone_set('Asia/Jakarta');
  $d = date("D");
  $date = date("d-M-y H:i:s");
  //echo $date;
  //echo "<br>";
  $hariDate = date("D");
  $bulanDate = date("M");
  $tahunDate = date("y");
  $date3 = date("H");
  var_dump($date3);
  $hari = "Tue";
  $bulan = "Sep";
  $tahun = "22";
  $jam = "09";

  //echo $date;
  if ($hari == $hariDate && $bulan == $bulanDate || $date3 == "$tahunDate") {
    echo "Selamat Belajar <br>";
  } else
    echo "ini hari $d <br>";
  echo $d . "" . $date;

  ?>
</body>

</html>