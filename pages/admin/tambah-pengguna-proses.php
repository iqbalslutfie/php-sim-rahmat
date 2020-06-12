<?php

include "../../koneksi.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$level = $_POST['level'];

mysqli_query($koneksi, "INSERT INTO pengguna VALUES('','$nama','$username','$password','$email','$level')");

header("location:kelola-pengguna.php");
