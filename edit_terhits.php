<?php include 'config.php'; 
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM buku WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<?php
if(isset($_POST['update'])){
    mysqli_query($conn, "UPDATE buku SET
        judul='$_POST[judul]',
        sinopsis='$_POST[sinopsis]',
        penulis='$_POST[penulis]',
        tahun_terbit='$_POST[tahun]'
        WHERE id='$id'
    ");
    header("Location: terhits.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Novel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
    <h2>Edit Novel</h2>

    <form method="POST">
        <input type="text" name="judul" value="<?= $d['judul']; ?>" required>
        <textarea name="sinopsis" required><?= $d['sinopsis']; ?></textarea>
        <input type="text" name="penulis" value="<?= $d['penulis']; ?>" required>
        <input type="number" name="tahun" value="<?= $d['tahun_terbit']; ?>" required>
        <button type="submit" name="update" class="btn-edit">Update</button>
    </form>

    <a href="terhits.php" class="btn-kembali">⬅ Kembali</a>
</div>

</body>
</html>
