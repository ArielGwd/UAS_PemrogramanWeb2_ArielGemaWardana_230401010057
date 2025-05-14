<?php

include_once '../koneksi.php';

if (!isset($_POST['id']) || !isset($_POST['nama'])) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['id']) && isset($_POST['nama'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $instansi = $_POST['instansi'];
    $tujuan = $_POST['tujuan'];

    if (empty($id) || empty($nama) || empty($instansi) || empty($tujuan)) {
        header('Location: index.php?error=' . urlencode('Semua field harus diisi.'));
        exit();
    }

    try {
        $stmt = $koneksi->prepare("UPDATE buku_tamu SET nama = ?, instansi = ?, tujuan = ? WHERE id = ?");
        $stmt->bind_param("sssi", $nama, $instansi, $tujuan, $id);
        if ($stmt->execute()) {
            header('Location: index.php');
        }
    } catch (Exception $e) {
        header('Location: index.php?error=' . urlencode($e->getMessage()));
    }
}
