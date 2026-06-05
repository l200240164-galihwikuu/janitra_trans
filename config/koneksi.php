<?php
$test = mysqli_connect('acela.proxy.rlwy.net', 'root', 'xapNcEqwGUVxXVmZLlODhEBCWbcpbJRX', 'railway', 14270);
echo "Error: " . mysqli_connect_error();
die();

define('DB_HOST', 'acela.proxy.rlwy.net');
define('DB_USER', 'root');
define('DB_PASS', 'PASSWORD_KAMU');
define('DB_NAME', 'railway');
define('DB_PORT', 3306);

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
if (!$conn) {
    die('<div style="text-align:center;padding:50px;font-family:Arial;">
        <h2 style="color:red;">❌ Koneksi Database Gagal!</h2>
        <p>Pastikan MySQL sudah berjalan dan database sudah di-import.</p>
        <p>Error: ' . mysqli_connect_error() . '</p>
    </div>');
}
mysqli_set_charset($conn, 'utf8mb4');
?>
