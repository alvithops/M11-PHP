<!DOCTYPE html>
<html>

<body>
    <?php
    require_once('user.php');
    $username = "susi";
    $password = "susi";
    if (otentik($username, $password))
        echo "Selamat Anda Berhasil";
    else
        echo "Gagal";
    ?>
</body>

</html>