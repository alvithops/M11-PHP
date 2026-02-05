<?php
session_start();
if (!isset($_SESSION['namauser'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Halaman Sukses</title>
</head>

<body>
    <header>
        <small>Login sebagai: <strong><?php echo htmlspecialchars($_SESSION['namauser']); ?></strong></small>
    </header>

    <h1>Selamat Datang</h1>
    <p>Anda berhasil masuk ke sistem.</p>

    <hr>
    <nav>
        <a href="logout.php" onclick="return confirm('Yakin ingin keluar?')">Logout</a>
    </nav>
</body>

</html>