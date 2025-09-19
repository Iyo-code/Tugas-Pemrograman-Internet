<!DOCTYPE html>
<html>
<head>
    <title>Menentukan Nilai Huruf</title>
</head>
<body>
    <h2>Menentukan Nilai Huruf by Trio Suro Wibowo NIM 2405551168</h2>

    <form method="post" action="">
        <input type="text" name="nilai" placeholder="Masukkan nilai (0-100)" required><br><br>
        <input type="submit" value="Cek Nilai">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];

        if (is_numeric($nilai) && $nilai >= 0 && $nilai <= 100) {
            if ($nilai >= 85) {
                $grade = "A";
            } elseif ($nilai >= 70) {
                $grade = "B";
            } elseif ($nilai >= 55) {
                $grade = "C";
            } elseif ($nilai >= 40) {
                $grade = "D";
            } else {
                $grade = "E";
            }
            echo "<h3>Nilai: $nilai <br> Grade: $grade</h3>";
        } else {
            echo "<h3>Input harus angka 0–100!</h3>";
        }
    }
    ?>
</body>
</html>
