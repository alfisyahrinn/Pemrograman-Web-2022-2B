<?php
//menyimpan di dalam variable
$nama = $_POST["nama"];
$email = $_POST["email"];
$komentar = $_POST["komentar"];
//menampilkan ke layar
echo $nama . "<br>";
echo $email . "<br>";
echo $komentar . "<br>";

//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "meden") or die("koneksi gagal");
//memasukkan ke dalam database
$masuk = mysqli_query($koneksi, "INSERT INTO bukutamu VALUES ('$nama', '$email', '$komentar')");
if ($masuk) {
  echo "input data berhasil👍";
} else {
  echo "gagal input data!😢";
}
