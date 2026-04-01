<?php
include 'config.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$sinopsis = $_POST['sinopsis'];
$penulis = $_POST['penulis'];
$tahun_terbit = $_POST['tahun_terbit'];

$query = "UPDATE buku SET 
            judul='$judul',
            sinopsis='$sinopsis',
            penulis='$penulis',
            tahun_terbit='$tahun_terbit'
          WHERE id='$id'";

mysqli_query($conn, $query);

header("Location: buku.php");
exit;
?>
