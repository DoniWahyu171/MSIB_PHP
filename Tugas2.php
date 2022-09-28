<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2 PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <div class="container p-3">
        <div class="row justify-content-center">
            <div class="col-md-7 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Form Data Pegawai</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <!-- NAMA -->
                            <div class="row mb-1">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control mb-4" placeholder="Nama">
                                </div>
                            </div>
                            <!-- AGAMA -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9">
                                    <select class="form-select" aria-label="Default select example" name="agama">
                                        <option selected>Silahkan Pilih Agama </option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen protestan">Kristen Protestan</option>
                                        <option value="Kristen katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-3 pt-0">Jabatan </legend>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jabatan" id="jabatan1"
                                            value="Manager">
                                        <label class="form-check-label"> Manager</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jabatan" id="jabatan2"
                                            value="Asisten">
                                        <label class="form-check-label"> Asisten</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jabatan" id="jabatan3"
                                            value="Kabag">
                                        <label class="form-check-label"> Kabag</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jabatan" id="jabatan4"
                                            value="Staff">
                                        <label class="form-check-label"> Staff</label>
                                    </div>
                                </div>
                            </fieldset>
                           
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-3 pt-0">Status </legend>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status1"
                                            value="Menikah">
                                        <label class="form-check-label"> Menikah</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status2"
                                            value="Belum menikah">
                                        <label class="form-check-label"> Belum menikah</label>
                                    </div>
                                </div>
                            </fieldset>
                        
                            <div class="row mb-1">
                                <label class="col-sm-3 col-form-label">Jumlah anak</label>
                                <div class="col-sm-9">
                                <input type="text" name="jml_anak" class="form-control mb-4" placeholder="jumlah">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button type="submit" name="proses"
                                    class="btn btn-primary btn-sm col-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="px-1 my-3">
        <table class="table table-bordered">
            <thead class="table-primary">
            <h3 align="center">Data Gaji Pegawai</h3>
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Agama</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Jumlah Anak</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan Jabatan</th>
                    <th>Tunjangan Keluarga</th>
                    <th>Gaji Kotor</th>
                    <th>Zakat Profesi</th>
                    <th>Take Home Pay</th>
                </tr>
            </thead>
            <tbody>              
            <?php
                        error_reporting(0);
                        $nama = $_POST['nama'];
                        $agama = $_POST['agama'];
                        $jabatan = $_POST['jabatan'];
                        $status = $_POST['status'];
                        $jml_anak = $_POST['jml_anak'];
                        $submit = $_POST['proses'];

                       
                        switch ($jabatan) {
                            case 'Manager':
                                $gapok = '20000000';
                                break;
                            case 'Asisten':
                                $gapok = '15000000';
                                break;
                            case 'Kabag':
                                $gapok = '10000000';
                                break;
                            case 'Staff':
                                $gapok = '4000000';
                                break;
                            default:
                                $gapok = '';
                        }

                     
                        $tunjab = $gapok * 0.2;

                      
                        if ($status == 'Menikah' && $jml_anak <= 2) {
                            $tunkel = $gapok * 0.05;
                        } else if ($status == 'Menikah' && $jml_anak >= 3 && $jml_anak <= 5) {
                            $tunkel = $gapok * 0.1;
                        } else if ($status == 'Menikah' && $jml_anak > 5) {
                            $tunkel = $gapok * 0.15;
                        } else $tunkel = '0';

                       
                        $gator = $gapok + $tunjab + $tunkel;

                       
                        $zakat = ($agama == 'Islam' && $gator >= 6000000) ? $zakat = $gator * 0.025 : $zakat = 0;

                      
                        $takehomepay = $gator - $zakat;
        
            if(isset($submit)){ ?>
                <tr>
                    <td><?= $nama ?></td>
                    <td><?= $agama ?></td>
                    <td><?= $jabatan ?></td>
                    <td><?= $status ?></td>
                    <td><?= $jml_anak ?></td>
                    <td>Rp <?= number_format((float)$gapok, 2, ',', '.'); ?></td>
                    <td>Rp <?= number_format((float)$tunjab, 2, ',', '.'); ?></td>
                    <td>Rp <?= number_format((float)$tunkel, 2, ',', '.'); ?></td>
                    <td>Rp <?= number_format((float)$gator, 2, ',', '.'); ?></td>
                    <td>Rp <?= number_format((float)$zakat, 2, ',', '.'); ?></td>
                    <td>Rp <?= number_format((float)$takehomepay, 2, ',', '.'); ?></td>
                </tr>

            <?php } ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
            
            </tbody>
        </table>
    
    </body>
</html>