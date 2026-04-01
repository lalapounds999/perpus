<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



</div>

<div class="kontak-box">
    <h2>💌 Hubungi Perpustakaan</h2>
    <p>Kirimkan pertanyaan, saran, atau pesan untuk kami.</p>

    <form action="proses_kontak.php" method="POST">
    <div class="form-row">
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="email" name="email" placeholder="Email" required>
    </div>

    <div class="form-row">
        <textarea name="pesan" placeholder="Tulis pesan kamu..." required></textarea>
    </div>
    
    <button type="submit" class="btn-kirim">Kirim Pesan</button>
    <a href="index.php" class="btn-kembali">← Kembali ke Loby</a>
</form>


</body>
</html>
