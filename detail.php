<?php
include 'config.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$data = mysqli_query($conn, "SELECT * FROM buku WHERE id=$id");
$d = mysqli_fetch_array($data);

if (!$d) {
    echo "Buku tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Novel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <a href="buku.php" class="button">⬅ Kembali ke Daftar Buku</a>

    <div class="detail-card">
        <h1><?= $d['judul']; ?></h1>

        <p class="detail-meta">
            ✍ Penulis: <b><?= $d['penulis']; ?></b> |
            📅 Tahun Terbit: <b><?= $d['tahun_terbit']; ?></b>
        </p>

        <div class="detail-sinopsis">
            <?= nl2br($d['sinopsis']); ?>
        </div>
    </div>

</div>

</body>
</html>
