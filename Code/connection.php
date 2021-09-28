<?php
$connection = new mysqli('localhost', 'root', '', 'findspot');
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
?>
