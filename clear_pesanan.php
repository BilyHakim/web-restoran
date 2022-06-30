<?php

include('koneksi.php');

$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM produk WHERE id_pemesanan='$id'");

if($hapus)
	header('location: pesanan.php');
else
	echo "Hapus data gagal";

?>