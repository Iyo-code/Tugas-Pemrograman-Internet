<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa by Trio Suro Wibowo NIM 2405551168</h2>

    <?php
    $mahasiswa = [
        ["nim" => "2405551168", "nama" => "Trio Suro Wibowo", "umur" => 19, "prodi" => "Teknologi Informasi"],
        ["nim" => "2405551101", "nama" => "I Made Adi Putra", "umur" => 19, "prodi" => "Teknologi Informasi"],
        ["nim" => "2405551102", "nama" => "I Gede Arya Mahendra", "umur" => 18, "prodi" => "Teknologi Informasi"],
        ["nim" => "2405551103", "nama" => "Ramadhan Naufal Prayoga", "umur" => 20, "prodi" => "Teknologi Informasi"],
        ["nim" => "2405551104", "nama" => "Ni Luh Ayu Kartika Dewi", "umur" => 20, "prodi" => "Teknologi Informasi"],
        ["nim" => "2405551105", "nama" => "Ni Kadek Wulan Cahyani", "umur" => 19, "prodi" => "Teknologi Informasi"],
        ["nim" => "2405551106", "nama" => "Putu Gede Dharmawan", "umur" => 22, "prodi" => "Teknologi Informasi"],
        ["nim" => "2405551107", "nama" => "Made Sri Yuliani", "umur" => 18, "prodi" => "Teknologi Informasi"],
        ["nim" => "2405551108", "nama" => "Komang Arya Saputra", "umur" => 20, "prodi" => "Teknologi Informasi"],
        ["nim" => "2405551109", "nama" => "Ketut Agung Pradnyana", "umur" => 21, "prodi" => "Teknologi Informasi"]
    ];

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr style='background-color:#f2f2f2;'>
            <th>NIM</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Program Studi</th>
          </tr>";

    foreach ($mahasiswa as $mhs) {
        echo "<tr>
                <td align='center'>{$mhs['nim']}</td>
                <td>{$mhs['nama']}</td>
                <td align='center'>{$mhs['umur']}</td>
                <td>{$mhs['prodi']}</td>
              </tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
