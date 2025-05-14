<?php

include_once '../koneksi.php';

if (!isset($_POST['nama'])) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $instansi = $_POST['instansi'];
    $tujuan = $_POST['tujuan'];

    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date('Y-m-d');
    $waktu = date('H:i:s');

    if (empty($nama) || empty($instansi) || empty($tujuan)) {
        header('Location: index.php?error=' . urlencode('Semua field harus diisi.'));
        exit();
    }

    try {
        $stmt = $koneksi->prepare("INSERT INTO buku_tamu (nama, instansi, tujuan, tanggal, waktu) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nama, $instansi, $tujuan, $tanggal, $waktu);
        if ($stmt->execute()) {
            header('Location: index.php');
        }
    } catch (Exception $e) {
        header('Location: index.php?error=' . urlencode($e->getMessage()));
    }
}
