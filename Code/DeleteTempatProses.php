<?php
	include('connection.php');

	$id = $_GET['id_wisata'];

	$sql="DELETE FROM tabel_review WHERE id_wisata='$id'";
	$connection->query($sql);

	$sql="DELETE FROM tabel_tempat_wisata WHERE id_wisata='$id'";
	$connection->query($sql);

	header('location:maintenance.php');
?>