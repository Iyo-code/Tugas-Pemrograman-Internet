<!DOCTYPE html>
<html>
<head>
    <title>Bilangan Genap</title>
</head>
<body>
    <h2>Bilangan Genap by Trio Suro Wibowo NIM 2405551168</h2>

    <form method="post" action="">
        Nilai n1: <input type="text" name="n1" required><br><br>
        Nilai n2: <input type="text" name="n2" required><br><br>
        <input type="submit" value="Tampilkan">
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        if (is_numeric($n1) && is_numeric($n2) && $n1 < $n2) {
            echo "<table border='1' cellpadding='8' cellspacing='0'>";
            echo "<tr style='background-color:#f2f2f2;'>
                    <th align='center'>Bilangan Genap dari $n1 sampai $n2</th>
                  </tr>";

            for ($i = $n1; $i <= $n2; $i++) {
                if ($i % 2 == 0) {
                    echo "<tr><td align='center'>$i</td></tr>";
                }
            }

            echo "</table>";
        } else {
            echo "<p style='color:red;'>Input harus berupa angka dan n1 lebih kecil dari n2!</p>";
        }
    }
    ?>
</body>
</html>
