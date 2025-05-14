<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "db_bukutamu";

try {
    $koneksi = new mysqli($host, $username, $password, $database);
    echo "Berhasil";

    return $koneksi;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
