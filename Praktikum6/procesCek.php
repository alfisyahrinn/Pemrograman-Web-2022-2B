<?php
if (isset($_POST["kirim"])) {
  //ambil dari form
  $username = $_POST["username"];
  $pw = $_POST["password"];
  $password = md5($pw);

  $koneksi = mysqli_connect("localhost", "root", "", "meden") or die("Koneksi Gagal");

  $hasil = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
  $hasilDb = mysqli_fetch_assoc($hasil);
  if ($hasilDb) {
    $usernameDB = $hasilDb["username"];
    $passwordDB = $hasilDb["password"];
  } else {
    $usernameDB = "";
    $passwordDB = "";
  }

  if ($username == "" && $password == "") {
    echo "emal ps kosong";
  } else if ($username == $usernameDB && $password == $passwordDB) {
    echo "Berhasil Login";
  } else {
    echo "Email atau password salah";
  }
}
