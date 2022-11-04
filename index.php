<?php
// Hubungkan ke file Connection.php
require "Connection.php";

// Query untuk menampilkan semua data di tb_barang
$query = "SELECT * FROM tb_barang";
// Hubungkan query di atas ke koneksi menggunakan function prepare()
$data = $connect->prepare($query);
// Ekesekusi query menggunakan function execute()
$data->execute();
// Ubah data kedalam bentuk object
$tampil = $data->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Toko Ismail</title>
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <h1>Toko Ismail</h1>
  <a href="barang-tambah.php">Tambah Data Barang Baru</a>
  <table>
    <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Harga Barang</th>
      <th>Stok Barang</th>
    </tr>
    <?php
    // Untuk menampilkan data menggunakan perulangan foreach
    $no = 1;
    foreach ($tampil as $t) {
      echo "
      <tr>
        <td>$no</td>
        <td>$t->barang_nama</td>
        <td>$t->barang_harga</td>
        <td>$t->barang_stok</td>
      </tr>
      ";
      $no++;
    }
    ?>
  </table>
</body>

</html>