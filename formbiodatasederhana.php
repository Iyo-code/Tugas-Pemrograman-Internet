<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata Sederhana</title>
</head>
<body>
    <h2>Form Biodata Sederhana by Trio Suro Wibowo NIM 2405551168</h2>

    <form method="post" action="">
        Nama:
        <input type="text" name="nama" required><br><br>
        Umur:
        <input type="text" name="umur" required><br><br>
        
        Jenis Kelamin:
        <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jk" value="Perempuan" required> Perempuan
        <br><br>

        Alamat:
        <input name="alamat" required><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];

        echo "<p>Halo, nama saya <b>$nama</b>. Umur saya <b>$umur tahun</b>. Saya seorang <b>$jk</b>. Saya tinggal di <b>$alamat</b>.</p>";
    }
    ?>
</body>
</html>
