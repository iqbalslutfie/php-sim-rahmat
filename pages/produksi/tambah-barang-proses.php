<?php

include "../../koneksi.php";

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi, "INSERT INTO barang VALUES('','$nama','$harga','$jumlah')");

header("location:kelola-barang.php");
