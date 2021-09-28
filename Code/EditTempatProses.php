<?php
    include('connection.php');

    $id=$_GET['idwisata'];

    $namatempat=$_POST['namatempat'];
    $kota=$_POST['kota'];
    $kategori=$_POST['kategori'];
    $maps = $_POST['maps'];


    $sql="UPDATE tabel_tempat_wisata SET nama_tempat_wisata='$namatempat', id_kota='$kota', id_kategori='$kategori' , gmaps = '$maps' WHERE id_wisata='$id'";
    $connection->query($sql);

    header('location:maintenance.php');
?>