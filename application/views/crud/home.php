<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TugasCRUD-WeblanjutCI</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-primary bg-opacity-75">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">
                    <img src="<?php echo base_url(); ?>/assets/img/layers.png" width="30" height="24"> RPLAplikasi
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="<?php echo base_url('index.php/Komponen006/home') ?>">Home</a>
                        </li>

                    </ul>
                    <span class="navbar-text text-light fw-bold">
                        2001050006
                    </span>
                </div>
            </div>
    </div>
    </nav><br>



    <div class="container">
        <div class="card">
            <div class="card-header bg-primary bg-opacity-25">
                Pemrograman WEB Lanjut
            </div>

            <div class="card-body">
                <?php echo $this->session->flashdata('pesan');
                ?>
                <div><a href="<?= site_url('Komponen006/tambahdata') ?>" class="btn btn-primary mb-2 btn-md rounded-3">Tambah Data</a>
                </div>
                <table class="table table-bordered table-striped table-hover mt-sm-3">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">Merek</th>
                            <th scope="col">Kapasitas</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        <?php
                        $nomor = 1;
                        foreach ($data006 as $item) {
                        ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $item->merek_006; ?></td>
                                <td><?php echo $item->kapasitas_006; ?></td>
                                <td><?php echo $item->harga_006; ?></td>
                                <td><?php echo $item->jenis_006; ?></td>

                                <td>
                                    <a href="<?= site_url('Komponen006/editdata/' . $item->id_komponen) ?>" class="btn btn-warning btn-sm ms-1 mb-1"> Edit</a>
                                    <a href="<?= site_url('Komponen006/hapus_data/' . $item->id_komponen) ?>" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger btn-sm ms-1 mb-1"> Delete</a>
                                </td>

                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <br>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-3 text-muted">© Created By Adi Wijaya</p>

            <ul class="nav col-md-4 mb-3 justify-content-end">
                <a class="navbar-brand ms-3" href="https://wa.me/62895394454712/">
                    <img src="../../assets/img/wa.png" width="27" height="27">
                </a>
                <a class="navbar-brand ms-3" href="https://www.instagram.com/nyttama.id/">
                    <img src="../../assets/img/ig.png" width="27" height="27">
                </a>
                <a class="navbar-brand ms-3" href="https://www.github.com/AdiWijaya2/">
                    <img src="../../assets/img/github.png" width="27" height="27">
                </a>
        </footer>
    </div>
</body>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</html>