<?php
include 'config.php';

if (!isset($_GET['id'])) {
    die('No ID specified.');
}

$id = intval($_GET['id']);

$delete = "DELETE FROM testimonials WHERE id = $id";
if (mysqli_query($conn, $delete)) {
    header('Location: view_comm.php');
    exit();
} else {
    echo 'Failed to delete testimonial.';
}
?>
