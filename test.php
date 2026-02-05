<!DOCTYPE html>
<html>

<body>
    <?php
    require_once('user.php');
    $username = "vitho";
    $password = "vitho";
    if (otentik($username, $password))
        echo "Berhasil Login";
    else
        echo "Gagal Login";
    ?>
</body>

</html>