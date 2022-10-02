
<?php
require 'Pegawai.php';
// membuat objek
$m1 = new Pegawai('001', 'Miya', 'Manager', 'Islam', 'Menikah');
$m2 = new Pegawai('002', 'Natan', 'Asisten Manager', 'Kristen Khatolik', 'Belum Menikah');
$m3 = new Pegawai('003', 'Grock', 'Kabag', 'Kristen Protestan', 'Menikah');
$m4 = new Pegawai('004', 'Franco', 'Staff', 'Budhha', 'Belum Menikah');
$m5 = new Pegawai('005', 'Lunox', 'Kabag', 'Konghucu', 'Menikah');

$pegawai = [$m1,$m2,$m3,$m4,$m5];

echo '<h3 align="center">'.Pegawai::PT.'</h3>';
$m1->mencetak();
$m2->mencetak();
$m3->mencetak();
$m4->mencetak();
$m5->mencetak();

echo 'Jumlah Pegawai: '.Pegawai::$jml;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    