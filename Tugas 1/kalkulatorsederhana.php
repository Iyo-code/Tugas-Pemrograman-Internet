<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana by Trio Suro Wibowo NIM 2405551168</h2>

    <form method="post" action="">
        <input type="text" name="angka1" placeholder="Angka pertama" required><br><br>
        <input type="text" name="angka2" placeholder="Angka kedua" required><br><br>
        
        <button type="submit" name="operator" value="tambah">Tambah (+)</button>
        <button type="submit" name="operator" value="kurang">Kurang (-)</button>
        <button type="submit" name="operator" value="kali">Kali (×)</button>
        <button type="submit" name="operator" value="bagi">Bagi (÷)</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        $hasil = 0;

        switch ($operator) {
            case "tambah":
                $hasil = $angka1 + $angka2;
                break;
            case "kurang":
                $hasil = $angka1 - $angka2;
                break;
            case "kali":
                $hasil = $angka1 * $angka2;
                break;
            case "bagi":
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $hasil = "Error: tidak bisa dibagi 0!";
                }
                break;
        }

        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</body>
</html>
