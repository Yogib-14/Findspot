<?php
include('connection.php');

$namatempat=$_POST['namatempat'];
$kota=$_POST['kota'];
$kategori=$_POST['kategori'];
$maps=$_POST['maps'];

	
$sql="INSERT INTO tabel_tempat_wisata (id_kategori, id_kota, nama_tempat_wisata, gmaps) VALUES ('$kategori', '$kota', '$namatempat', '$maps')";
$connection->query($sql);

header('location:maintenance.php');

?>