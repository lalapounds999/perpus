<?php
include 'config.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM buku WHERE id='$id'");
header("Location: terhits.php");
?>
