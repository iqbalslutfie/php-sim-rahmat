<?php

include "../../koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi, "UPDATE barang SET nama='$nama', harga='$harga',jumlah='$jumlah' WHERE id='$id'");

header("location:kelola-barang.php");
