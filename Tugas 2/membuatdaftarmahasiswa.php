<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa by Trio Suro Wibowo NIM 2405551168</h2>

    <?php
    $mahasiswa = [
        "2405551168" => "Trio Suro Wibowo",
        "2405551101" => "I Made Adi Putra",
        "2405551102" => "I Gede Arya Mahendra",
        "2405551103" => "Ramadhan Naufal Prayoga",
        "2405551104" => "Ni Luh Ayu Kartika Dewi",
        "2405551105" => "Ni Kadek Wulan Cahyani"
    ];

    $prodi = "Teknologi Informasi";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
          </tr>";

    foreach ($mahasiswa as $nim => $nama) {
        echo "<tr>
                <td>$nim</td>
                <td>$nama</td>
                <td>$prodi</td>
              </tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
