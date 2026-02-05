<?php
// perbaikan: hapus angka 5 atau karakter apa pun sebelum session_start
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>latihan session</title>
</head>
<body>
<?php
// set variabel sesi dengan huruf kecil sesuai preferensi
$_SESSION["username"] = "ika";
$_SESSION["nama"] = "kartika fatmawati";

echo "variabel sesi telah diciptakan.";
?>
</body>
</html>