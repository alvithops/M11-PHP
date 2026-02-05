<?php
$cookie_name = "namauser";
$cookie_value = "Kartika Fatmawati";
// Set cookie berlaku selama 30 hari
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // Tadi ada angka '14' di sini yang menyebabkan syntax error, sudah dihapus
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Nama Cookie '" . $cookie_name . "' baru saja dibuat atau belum ada! Silakan refresh halaman.";
    } else {
        echo "Cookie '" . $cookie_name . "' sudah ada!<br>";
        echo "Nilainya adalah: " . $_COOKIE[$cookie_name];
    }
    ?>

</body>

</html>