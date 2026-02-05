<!DOCTYPE html>
<html>

<body>
    <?php
    require_once('user.php');
    $username = "susi";
    $password = "susi";
    if (otentik($username, $password))
        echo "Berhasil Login";
    else
        echo "Maaf Anda Gagal Login";
    ?>
</body>

</html>