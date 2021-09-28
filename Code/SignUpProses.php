<?php
include('connection.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO tabel_user (nama_user, email_user, password_user, tipe_user) VALUES ('$name', '$email', '$password', 'user')";
$connection->query($sql);




header('Location: SignUp.php');
?>