<?php
    include('connection.php');

    $id=$_GET['id_review'];


    $sql="UPDATE tabel_review SET status='Confirmed' WHERE id_review='$id'";
    $connection->query($sql);

    header('location:ReviewApproval.php');
?>