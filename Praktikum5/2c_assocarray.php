<?php
$koneksi = mysqli_connect("localhost", "root", "", "meden") or die("Koneksi Gagal");

$hasil = mysqli_query($koneksi, "SELECT * FROM liga");
while ($row = mysqli_fetch_array($hasil)) {
  echo "Liga " . $row["nama"];
  echo "Mempunyai " . $row["champion"];
  echo "Wakil Liga Champion <br>";
}
