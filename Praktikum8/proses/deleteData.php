<?php
require 'koneksi.php';
$id = $_GET["id"];
$result = mysqli_query($koneksi, "DELETE FROM user WHERE id=$id");
if ($result) {
  echo "
    <script>
    alert('Hapus data berhasil')
    document.location='../user'
    </script>
    ";
} else {
  echo "
    <script>
    alert('Gagal Menghapus Data')
    document.location='../user'
    </script>
    ";
}
