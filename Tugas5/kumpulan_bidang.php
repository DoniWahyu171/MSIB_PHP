<?php
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$l1 = new Lingkaran(9);
$p1 = new PersegiPanjang(6, 2);
$s1 = new Segitiga(2, 5);

$bidang = [$l1,$p1,$s1];

$ar_Judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas5 PHP</title>
</head>
<h3 align="center">Data Bidang</h3>
    <table align="center" border="1" cellpadding="10" width="70%">
        <thead>
                <tr bgcolor="Chartreuse">
                    <?php
                           
                            foreach ($ar_Judul as $judul) {?>
                                <th><?=$judul?></th>
                            <?php
                        }?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no =1;
                        foreach ($bidang as $bdg) {?>
                            <tr>
                                <td><?=$no++?></td>
                                <?=$bdg->mencetak()?>
                            </tr>

                        <?php } ?>
                </tbody>    
            </table>
        </div>
    </div>
</body>
</html>