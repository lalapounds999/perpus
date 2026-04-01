<?php include 'config.php'; ?>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($conn, "INSERT INTO buku VALUES(
        '',
        '$_POST[judul]',
        '$_POST[sinopsis]',
        '$_POST[penulis]',
        '$_POST[tahun]'
    )");
    header("Location: terhits.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Novel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<body>

<div class="form-container">
    <h2>📚 Tambah Novel Ter-Hits</h2>

    <form method="POST" action="">
        <label>Judul Novel</label>
        <input type="text" name="judul" required>

        <label>Sinopsis</label>
        <textarea name="sinopsis" required></textarea>

        <label>Penulis</label>
        <input type="text" name="penulis" required>

        <label>Tahun Terbit</label>
        <input type="number" name="tahun" required>

        <button type="submit" name="simpan" class="btn-simpan">Simpan</button>
        <a href="terhits.php" class="btn-kembali">← Kembali</a>
    </form>
</div>

</body>
</div>
</body>
</html>
