<?php
session_start();

include '../../src/config/koneksi.php';
require '../../src/config/cloudinary.php';

use Cloudinary\Api\Upload\UploadApi;

$judul = mysqli_real_escape_string($conn, $_POST['judul']);
$kategori = mysqli_real_escape_string($conn, $_POST['kategori']);

try {

    $result = (new UploadApi())->upload(
        $_FILES['foto']['tmp_name'],
        [
            'folder' => 'janitra_galeri'
        ]
    );

    $fotoUrl = $result['secure_url'];

    mysqli_query($conn, "
        INSERT INTO galeri(kategori, judul, foto)
        VALUES('$kategori','$judul','$fotoUrl')
    ");

    $_SESSION['success'] = 'Foto galeri berhasil diupload!';

} catch (Exception $e) {

    $_SESSION['error'] = 'Upload gagal: ' . $e->getMessage();
}

header("Location: galeri.php");
exit;