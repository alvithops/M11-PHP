<?php
require_once('koneksitoko.php');

// mencari data berdasar username
function cariuserdariusername($username)
{
    $koneksi = koneksitoko();

    // perbaikan: gunakan mysqli_real_escape_string untuk keamanan dasar
    $username = mysqli_real_escape_string($koneksi, $username);
    $sql = "select * from user where username='$username'";
    $hasil = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($hasil) > 0) {
        $baris = mysqli_fetch_array($hasil);
        $data['username'] = $baris['username'];
        // perbaikan: angka 8 yang mengganggu sudah dihapus
        $data['password'] = $baris['password'];
        $data['nama'] = $baris['nama'];

        mysqli_close($koneksi);
        return $data;
    } else {
        mysqli_close($koneksi);
        return null;
    }
}

// memeriksa otentikasi user
function otentik($username, $password)
{
    $pwdmd5 = md5($password);
    $datauser = cariuserdariusername($username);

    if ($datauser != null) {
        if ($pwdmd5 == $datauser['password']) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>