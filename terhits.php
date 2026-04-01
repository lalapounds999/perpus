<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Novel Ter-Hits</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<body>

<div class="container">

    <h2>🔥 Daftar Novel Ter-Hits</h2>
    <a href="tambah_terhits.php" class="btn-tambah">+ Tambah Novel</a>

    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>


        <?php
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM buku ORDER BY tahun_terbit DESC");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['judul']; ?></td>
            <td><?= $d['penulis']; ?></td>
            <td><?= $d['tahun_terbit']; ?></td>

                <td class="aksi">
    <a href="edit_terhits.php?id=<?php echo $d['id']; ?>" class="btn-edit">Edit</a>
    <a href="hapus_terhits.php?id=<?php echo $d['id']; ?>" class="btn-hapus" 
       onclick="return confirm('Yakin mau hapus?')">Hapus</a>
</td>

        </tr>
        <?php } ?>
    </table>

    <a href="index.php" class="btn-kembali">⬅ Kembali</a>
</div>
</body>
</html>
