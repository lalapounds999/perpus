<?php
include 'config.php';

if(isset($_POST['simpan'])){
    $judul = $_POST['judul'];
    $sinopsis = $_POST['sinopsis'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun_terbit'];

    $query = "INSERT INTO buku (judul, sinopsis, penulis, tahun_terbit)
              VALUES ('$judul', '$sinopsis', '$penulis', '$tahun')";

    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: buku.php"); // balik ke halaman buku
        exit;
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>📚 Tambah Buku</h2>

    <form method="POST" action="tambah.php">
        <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" name="judul" required>
        </div>

        <div class="form-group">
            <label>Sinopsis Buku</label>
            <textarea name="sinopsis" required></textarea>
        </div>

        <div class="form-group">
            <label>Nama Penulis</label>
            <input type="text" name="penulis" required>
        </div>

        <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" required>
        </div>

        <button type="submit" name="simpan">Simpan</button>

    </form>

    <a href="buku.php" class="btn-kembali">← Kembali ke Daftar Buku</a>
</div>
</body>
</html>
