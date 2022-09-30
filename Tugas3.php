
<?php
//array scalar (1 dimensi)
$b1 = ['nim'=>'201953001','nama'=>"Miya",'nilai'=>90];
$b2 = ['nim'=>'201953002','nama'=>"Lunox",'nilai'=>80];
$b3 = ['nim'=>'201953003','nama'=>"Alucard",'nilai'=>50];
$b4 = ['nim'=>'201953004','nama'=>"Ling",'nilai'=>60];
$b5 = ['nim'=>'201953005','nama'=>"Estes",'nilai'=>55];
$b6 = ['nim'=>'201953006','nama'=>"Claude",'nilai'=>70];
$b7 = ['nim'=>'201953007','nama'=>"Bruno",'nilai'=>75];
$b8 = ['nim'=>'201953008','nama'=>"Hayabusa",'nilai'=>50];
$b9 = ['nim'=>'201953009','nama'=>"Kagura",'nilai'=>80];
$b10 = ['nim'=>'201953010','nama'=>"Melisa",'nilai'=>95];

$ar_judul = ['No','Nim','Nama','Nilai',
'Keterangan','Grade','Predikat'];

//array assosiative (> 1 dimensi)
$dftnilai = [$b1,$b2,$b3,$b4,$b5,$b6,$b7,$b8,$b9,$b10];

//aggregate function in array

$jumlah_mhs = count($dftnilai);
$jml_nilai = array_column($dftnilai,'nilai');
$total = array_sum($jml_nilai);
$max = max($jml_nilai);
$min = min($jml_nilai);
$rata2 = $total / $jumlah_mhs;
//keterangan
$keterangan = [
    'Nilai Tertinggi'=>$max,
    'Nilai Terendah'=>$min,
    'Rata2'=>$rata2,
    'Jumlah Mahasiswa'=>$total
];
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas3 PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <h3 class="text-center">Data Nilai Mahasiswa</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                        <?php
                        $no = 1;
                        foreach ($dftnilai as $mhs) {
                            
                            $ket = ($mhs['nilai'] >= 60) ? 'Lulus' : 'Gagal';

                            if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) {
                                $grade = 'A';
                            } else if ($mhs['nilai'] >= 75 && $mhs['nilai'] <= 84) {
                                $grade = 'B';
                            } else if ($mhs['nilai'] >= 65 && $mhs['nilai'] <= 74) {
                                $grade = 'C';
                            } else if ($mhs['nilai'] >= 55 && $mhs['nilai'] <= 64) {
                                $grade = 'D';
                            } else if ($mhs['nilai'] <= 54) {
                                $grade = 'E';
                            } else {
                                $grade = '';
                            }

                          
                            switch ($grade) {
                                case "A": $predikat = "Memuaskan"; break;
                                case "B": $predikat = "Baik"; break;
                                case "C": $predikat = "Cukup"; break;
                                case "D": $predikat = "Kurang"; break;
                                case "E": $predikat = "Buruk"; break;
                                default: $predikat = ""; break;
                            }
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $mhs['nim'] ?></td>
                                <td><?= $mhs['nama'] ?></td>
                                <td><?= $mhs['nilai'] ?></td>
                                <td><?= $ket ?></td>
                                <td><?= $grade ?></td>
                                <td><?= $predikat ?></td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                    <tfoot>
                        <?php
                        foreach ($keterangan as $ket => $hasil) {
                        ?>
                            <tr>
                                <th colspan=" 6"><?= $ket ?></th>
                                <th><?= $hasil ?></th>
                            </tr>
                        <?php } ?>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>