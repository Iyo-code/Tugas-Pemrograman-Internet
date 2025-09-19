<!DOCTYPE html>
<html>
<head>
    <title>Ganjil Genap</title>
</head>
<body>
    <h2>Cek Bilangan Ganjil atau Genap by Trio Suro Wibowo NIM 2405551168</h2>

    <form method="post" action="">
        <input type="text" name="angka" placeholder="Masukkan angka" required><br><br>
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = $_POST['angka'];

        if (is_numeric($angka)) {
            if ($angka % 2 == 0) {
                echo "<h3>Bilangan $angka adalah GENAP</h3>";
            } else {
                echo "<h3>Bilangan $angka adalah GANJIL</h3>";
            }
        } else {
            echo "<h3>Input harus berupa angka!</h3>";
        }
    }
    ?>
</body>
</html>
