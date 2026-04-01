<?php
include 'config.php';

$nama  = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

mysqli_query($conn, "INSERT INTO kontak (nama, email, pesan) 
VALUES ('$nama', '$email', '$pesan')");

// Arahkan ke halaman sukses
header("Location: sukses_kontak.php");
exit;

?>
