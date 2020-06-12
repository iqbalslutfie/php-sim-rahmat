<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from pengguna where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['role'] == "admin") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:index.php");

        // cek jika user login sebagai manajer
    } else if ($data['role'] == "manajer") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "manajer";
        // alihkan ke halaman dashboard manajer
        header("location:pages/admin/manajer.php");

        // cek jika user login sebagai gudang
    } else if ($data['role'] == "gudang") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "gudang";
        // alihkan ke halaman dashboard gudang
        header("location:pages/admin/gudang.php");
    } else {

        // alihkan ke halaman login kembali
        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}
