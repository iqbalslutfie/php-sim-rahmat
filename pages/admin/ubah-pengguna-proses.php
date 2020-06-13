<?php

include "../../koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$level = $_POST['level'];

mysqli_query($koneksi, "UPDATE pengguna SET nama='$nama', username='$username',password='$password',email='$email',level='$level' WHERE id='$id'");

header("location:kelola-pengguna.php");
