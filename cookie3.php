<?php
// set expiration date ke satu jam yang lalu
setcookie("namauser", "", time() - 3600);
?>
<!DOCTYPE html>
<html>
15

<body>
    <?php
    echo "Cookie 'namauser' telah dihapus.";
    ?>
</body>

</html>