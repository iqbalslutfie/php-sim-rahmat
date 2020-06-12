<?php
session_start();

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    //jika login sebagai admin
    if ($data['level'] == "manajer") {
        //buat session
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "manajer";

        //alihkan
        header("location:manajer/");
    } else if ($data['level'] == "admin") {
        //buat session
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";

        //alihkan
        header("location:pages/admin/");
    } else if ($data['level'] == "gudang") {
        //buat session
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "gudang";

        //alihkan
        header("location:gudang/");
    } else if ($data['level'] == "produksi") {
        //buat session
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "produksi";

        //alihkan
        header("location:produksi/");
    } else if ($data['level'] == "admin") {
        //buat session
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";

        //alihkan
        header("location:pages/admin/");
    } else if ($data['level'] == "marketing") {
        //buat session
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "marketing";

        //alihkan
        header("location:marketing/");
    } else {

        // alihkan ke halaman login kembali
        header("location:../../index.php?pesan=gagal");
    }
} else {
    header("location:../../index.php?pesan=gagal");
}
