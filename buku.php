<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

</div>

<div class="container">
    <a href="index.php" class="button">🏠 Kembali ke Lobby</a>
    <h1>📚 Data Recomendasi Novel</h1>

    <a href="tambah.php" class="btn btn-tambah">+ Tambah Buku</a>


    <table class="table">
        <tr>
    <th>Judul</th>
    <th>Sinopsis</th>
    <th>Penulis</th>
    <th>Tahun terbit</th>
    <th>Aksi</th>
</tr>

        <?php
        $data = mysqli_query($conn, "SELECT * FROM buku");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
    <td><?= $d['judul']; ?></td>
    <td>
        <?= substr($d['sinopsis'], 0, 120); ?>...
        <a href="detail.php?id=<?= $d['id']; ?>">Selengkapnya</a>
    </td>
    <td><?= $d['penulis']; ?></td>
    <td><?= $d['tahun_terbit']; ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id']; ?>" class="button">Edit</a>
        <a href="hapus.php?id=<?= $d['id']; ?>" class="button" onclick="return confirm('Hapus buku ini?')">Hapus</a>
    </td>
</tr>

        <?php } ?>
    </table>
</div>
</body>
</html>
