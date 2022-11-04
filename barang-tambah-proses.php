<?php
// Hubungkan ke koneksi
require "Connection.php";

if (isset($_POST["barang-simpan"])) {
  // Query untuk menambahkan data baru ke database
  $query = "INSERT INTO tb_barang(barang_nama, barang_harga, barang_stok) VALUES (?, ?, ?)";
  // Hubungkan query ke koneksi prepare()
  $data = $connect->prepare($query);
  // Masukkan data yang dari input ke dalam query
  // menggunakan function bindParam()
  $data->bindParam(1, $_POST["barang-nama"]);
  $data->bindParam(2, $_POST["barang-harga"]);
  $data->bindParam(3, $_POST["barang-stok"]);
  // Query ekseskusi
  $berhasil = $data->execute();

  // Kalau data berhasil disimpan ke database
  if ($berhasil) {
    // Kembalikan kehalaman index.php
    header("Location: index.php");
  } else {
    // Kalau data gagal disimpan ke database
    echo "Data Gagal Disimpan";
  }
}
