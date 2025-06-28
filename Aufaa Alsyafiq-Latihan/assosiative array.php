<!DOCTYPE html>
<html>
<head>
    <title>Penemu Terkenal di Dunia</title>
    <style>
        table {
            border-collapse: collapse;
            width: 95%;
        }
        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: left;
        }
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<h2>perusahaan Terkenal di Dunia</h2>

<?php
$perusahaan = array(
    array(
        "nama" => "Gucci",
        "asal" => "Italia",
        "bidang" => "Fashion",
        "tahun" => 1921,
        "gambar" => "Img/gucci.jpg"
    ),
    array(
        "nama" => "Adidas",
        "asal" => "Jerman",
        "bidang" => "Fashion",
        "tahun" => 1949,
        "gambar" => "img/adidas.jpg"
    ),
    array(
        "nama" => "Converse",
        "asal" => "Amerika",
        "bidang" => "Fashion",
        "tahun" => 1908,
        "gambar" => "img/converse.jpg"
    ),
    array(
        "nama" => "Dior",
        "asal" => "France",
        "bidang" => "Fashion",
        "tahun" => 1946,
        "gambar" => "img/dior.jpg"
    ),
    array(
        "nama" => "Nike",
        "asal" => "Amerika Serikat",
        "bidang" => "Fashion",
        "tahun" => 1964,
        "gambar" => "img/nike.jpg"
    ),
    array(
        "nama" => "Supreme",
        "asal" => "Amerika Serikat",
        "bidang" => "Fashion",
        "tahun" => 1994,
        "gambar" => "img/supreme.jpg"
    ),
    array(
        "nama" => "Advan",
        "asal" => "Indonesia",
        "bidang" => "Elektronik",
        "tahun" => 1999 ,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Advan_%282024%29.png/800px-Advan_%282024%29.png"
    ),
    array(
        "nama" => "Axioo",
        "asal" => "Indonesia",
        "bidang" => "Elektronik",
        "tahun" => 2004 ,
        "gambar" => "https://upload.wikimedia.org/wikipedia/id/thumb/c/c0/Logo_Axioo_Baru.png/800px-Logo_Axioo_Baru.png"
    ),
    array(
        "nama" => "Itel Mobile",
        "asal" => "China",
        "bidang" => "Elektronik",
        "tahun" => 2014,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Itel_Indonesia_logo.png/800px-Itel_Indonesia_logo.png"
    ),
    array(
        "nama" => "Infinix",
        "asal" => "China",
        "bidang" => "Elektronik",
        "tahun" => 2013,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Infinix_logo.svg/800px-Infinix_logo.svg.png"
    )
);

echo "<table>";
echo "<tr><th>Nama</th><th>Asal</th><th>bidang</th><th>Tahun</th><th>Gambar</th></tr>";

foreach ($perusahaan as $data) {
    echo "<tr>";
    echo "<td>{$data['nama']}</td>";
    echo "<td>{$data['asal']}</td>";
    echo "<td>{$data['bidang']}</td>";
    echo "<td>{$data['tahun']}</td>";
    echo "<td><img src='{$data['gambar']}' alt='{$data['nama']}'></td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>