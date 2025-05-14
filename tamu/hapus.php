<?php

include_once '../koneksi.php';

if (!isset($_POST['id'])) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    if (empty($id)) {
        header('Location: index.php?error=' . urlencode('ID tidak valid.'));
        exit();
    }

    try {
        $stmt = $koneksi->prepare("DELETE FROM buku_tamu WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            header('Location: index.php');
        }
    } catch (Exception $e) {
        header('Location: index.php?error=' . urlencode($e->getMessage()));
    }
}
