<!DOCTYPE html>
<html>

<body>
    <?php
    require_once('user.php');
    $username = "susi";
    $password = "abc";
    if (otentik($username, $password))
        echo "Berhasil";
    else
        echo "Gagal";
    ?>
</body>

</html>