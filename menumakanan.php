<!DOCTYPE html>
<html>
<head>
    <title>Menu Makanan</title>
</head>
<body>
    <h2>Pilih Menu Makanan by Trio Suro Wibowo NIM 2405551168</h2>

    <form method="post" action="">
        <input type="radio" name="menu" value="nasigoreng" required> Nasi Goreng<br>
        <input type="radio" name="menu" value="soto"> Soto<br>
        <input type="radio" name="menu" value="mieayam"> Mie Ayam<br><br>

        <input type="submit" value="Lihat Harga">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $menu = $_POST['menu'];
        $harga = 0;

        switch ($menu) {
            case "nasigoreng":
                $harga = 15000;
                echo "<h3>Nasi Goreng - Rp $harga</h3>";
                break;
            case "soto":
                $harga = 12000;
                echo "<h3>Soto - Rp $harga</h3>";
                break;
            case "mieayam":
                $harga = 10000;
                echo "<h3>Mie Ayam - Rp $harga</h3>";
                break;
            default:
                echo "<h3>Menu tidak tersedia</h3>";
        }
    }
    ?>
</body>
</html>
