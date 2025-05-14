<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "db_bukutamu";

try {
    $koneksi = new mysqli($host, $username, $password, $database);
    return $koneksi;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
