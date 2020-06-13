<?php
include "../../koneksi.php";

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM pengguna WHERE id=$id");

header("location:kelola-pengguna.php");
