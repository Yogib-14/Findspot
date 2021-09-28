<?php
	include('connection.php');

	$id = $_GET['id_review'];

	$sql="DELETE FROM tabel_review WHERE id_review='$id'";
	$connection->query($sql);


	header('location:ReviewApproval.php');
?>