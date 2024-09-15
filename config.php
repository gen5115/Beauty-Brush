<?php
$conn = mysqli_connect('localhost', 'root', '', 'user_db');

if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}
?>