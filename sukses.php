<?php
// memulai sesi
session_start();

// proteksi: jika sesi tidak ditemukan, hentikan akses
if (!isset($_SESSION['namauser'])) {
    echo "akses ditolak. silakan login dahulu.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>halaman sukses</title>
</head>

<body>
    <?php
    // menampilkan nama user dari sesi
    echo 'user: ' . htmlspecialchars($_SESSION['namauser']);
    ?>
    <h1>selamat datang</h1>
    <p>anda berhasil masuk ke sistem.</p>
    <hr>
    <a href="logout.php">keluar</a>
</body>

</html>