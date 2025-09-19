<!DOCTYPE html>
<html>
<head>
    <title>Daftar Harga Barang</title>
</head>
<body>
    <h2>Daftar Harga Barang by Trio Suro Wibowo NIM 2405551168</h2>

    <?php
    $barang = [
        "Nasi Goreng" => 15000,
        "Mie Ayam" => 12000,
        "Soto Ayam" => 18000,
        "Ayam Geprek" => 20000,
        "Es Teh" => 5000
    ];

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr style='background-color:#f2f2f2;'>
            <th align='left'>Nama Barang</th>
            <th align='right'>Harga (Rp)</th>
          </tr>";

    foreach ($barang as $nama => $harga) {
        echo "<tr>
                <td align='left'>$nama</td>
                <td align='right'>" . number_format($harga, 0, ',', '.') . "</td>
              </tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
