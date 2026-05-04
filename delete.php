<?php
require_once 'config/database.php';

// todo: validasi ID dari GET
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php?error=ID tidak ditemukan");
    exit;
}

$id = (int) $_GET['id'];

// todo: cek keberadaan data
$stmt = $conn->prepare("SELECT id_kategori FROM kategori WHERE id_kategori = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    header("Location: index.php?error=Data tidak ditemukan");
    exit;
}

// todo: delete data
$stmt = $conn->prepare("DELETE FROM kategori WHERE id_kategori = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

// todo: redirect dengan pesan
if ($stmt->affected_rows > 0) {
    header("Location: index.php?success=Data berhasil di hapus");
} else {
    header("Location: index.php?error=Gagal menghapus data");
}
exit;
?>