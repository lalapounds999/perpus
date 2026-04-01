<?php
include 'config.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Ambil data buku berdasarkan ID
$query = mysqli_query($conn, "SELECT * FROM buku WHERE id='$id'");
$buku  = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<input type="hidden" name="id_buku" value="<?= $data['id_buku']; ?>">

<div class="container">
    <h2>✏️ Edit Data Buku</h2>

    <form action="proses_edit.php" method="POST" class="form-buku">
        <input type="hidden" name="id" value="<?= $buku['id']; ?>">

        <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" name="judul" value="<?= htmlspecialchars($buku['judul']); ?>" required>
        </div>

        <div class="form-group">
            <label>Sinopsis</label>
            <input type="text" name="sinopsis" value="<?= htmlspecialchars($buku['sinopsis']); ?>" required>
        </div>

        <div class="form-group">
            <label>Penulis</label>
            <input type="text" name="penulis" value="<?= $buku['penulis']; ?>" required>
        </div>

        <div class="form-group">
            <label>Tahun terbit</label>
<input type="text" name="tahun_terbit" value="<?= $buku['tahun_terbit']; ?>">

        </div>

        <button type="submit" class="btn-simpan">💾 Simpan Perubahan</button>
        <a href="buku.php" class="btn-batal">Batal</a>
    </form>
</div>

</body>
</html>
