<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengubah Data</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
</head>

<body>

    <div class="d-flex justify-content-center mt-5">
        <div class="card" style="width: 35rem ;">
            <div class="card-header bg-primary bg-opacity-25 text-center fw-bold text-uppercase">
                Form Edit Data
            </div>

            <div class="card-body">
                <form action="<?= site_url('Komponen006/prosesedit') ?>" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Merek</label>
                        <input type="hidden" value="<?php echo $data006->id_komponen; ?>" name="txtid">
                        <input type="text" class="form-control opacity-75 rounded-3 p-1" id="txtmerek" name="txtmerek" value="<?php echo $data006->merek_006; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kapasitas</label>
                        <input type="text" class="form-control opacity-75 rounded-3 p-1" id="txtkapasitas" name="txtkapasitas" value="<?php echo $data006->kapasitas_006; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Harga</label>
                        <input type="text" class="form-control opacity-75 rounded-3 p-1" id="txtharga" name="txtharga" value="<?php echo $data006->harga_006; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Jenis</label>
                        <input type="text" class="form-control opacity-75 rounded-3 p-1" id="txtjenis" name="txtjenis" value="<?php echo $data006->jenis_006; ?>">
                    </div>
                    <div class="mb-4">
                        <p class="fst-italic ms-1">
                            * Type HDD or RAM to fill out form Jenis *
                        </p>
                    </div>

                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <a href="<?= site_url('Komponen006/home') ?>" class="btn btn-warning ms-2">Kembali</a>
            </div>
            </form><br>
        </div>

</body>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>

</html>