<?php
session_start();
include '../../src/config/koneksi.php';

$judul = $_POST['judul'];
$kategori = $_POST['kategori'];

$uploadDir = '../assets/images/galeri/';

$namaFile = time() . '_' . basename($_FILES['foto']['name']);

if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadDir . $namaFile)) {

    mysqli_query($conn, "
        INSERT INTO galeri(kategori, judul, foto)
        VALUES('$kategori','$judul','$namaFile')
    ");

    $_SESSION['success'] = 'Foto galeri berhasil diupload!';
    header("Location: galeri.php");
    exit;

} else {
    $_SESSION['error'] = 'Upload gagal!';
    header("Location: galeri.php");
    exit;
}
