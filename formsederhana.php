<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
</head>
<body>
    <h2>Form Sederhana by Trio Suro Wibowo NIM 2405551168</h2>
    
    <form method="post" action="">
        Masukkan Nama: <input type="text" name="nama" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        echo "<h3>Halo, $nama selamat belajar PHP!</h3>";
    }
    ?>
</body>
</html>
