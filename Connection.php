<?php

// Hostname
$hostname = "localhost";
// Username
$username = "root";
// Password
$password = "";
// Database Name
$dbname = "ismail_toko";

try {
  $connect = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
  // Kalau terjadi error di bagian koneksi
  // Maka pesan akan ditampilkan
  echo "Error : " . $e->getMessage();
}
