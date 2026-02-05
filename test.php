<!DOCTYPE html>
<html>

<body>
    <?php
    require_once('user.php');
    $username = "payung";
    $password = "payung";
    if (otentik($username, $password))
        echo "Berhasil";
    else
        echo "Gagal";
    ?>
</body>

</html>