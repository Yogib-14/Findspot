<?php

include('connection.php');

$id_tempat_wisata = $_POST["tempat_wisata"];
$kebersihan = $_POST["kebersihan"];
$harga = $_POST["harga"];
$transportasi = $_POST["transportasi"];
$tempatmakan = $_POST["tempatmakan"];
$sightseeing = $_POST["sightseeing"];
$id_user = $_GET['id_user'];

$sqlcheck="SELECT * FROM tabel_review WHERE id_user=$id_user AND id_wisata=$id_tempat_wisata";
$query=$connection->query($sqlcheck);

if($krow=$query->fetch_array()){
    $sql="UPDATE tabel_review SET kebersihan = '$kebersihan', harga = '$harga', tempat_makan = '$tempatmakan', akomodasi_transportasi = '$transportasi', sightseeing = '$sightseeing', status = 'Pending' WHERE id_wisata = '$id_tempat_wisata' AND id_user = '$id_user'";
    $connection->query($sql);

    $message = "Anda sudah pernah mereview tempat wisata ini sebelumnya! Review akan diganti dengan ulasan terbaru!";
    echo "<script type='text/javascript'>alert('$message'); window.location.href='index.php';</script>"; 
    
}else{
    $sql="INSERT INTO tabel_review (id_wisata, id_user, kebersihan, harga, tempat_makan, akomodasi_transportasi, sightseeing, status) VALUES ('$id_tempat_wisata', '$id_user', '$kebersihan', '$harga', '$tempatmakan', '$transportasi', '$sightseeing', 'Pending')";
    $connection->query($sql);
    
    $message = "Terima kasih karena telah memberikan review!";
    echo "<script type='text/javascript'>alert('$message'); window.location.href='index.php';</script>"; 
    
    
    
}





?>