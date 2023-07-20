<!doctype html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">


    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/datatables/DataTables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/datatables/Buttons/css/buttons.dataTables.min.css"> -->

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
        <div class="container">
            <a class="h3 navbar-brand text-white" href="<?= base_url(); ?>logistik/index">Logistik KP3</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Raw Material
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url() ?>logistik/material">Transaksi Mat'l Baru</a>
                            <a class="dropdown-item" href="<?= base_url() ?>logistik/form">Transaksi Mat'l Masuk</a>
                            <a class="dropdown-item" href="<?= base_url() ?>logistik/formKeluar">Transaksi Mat'l Keluar</a>
                            <!-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Komponen / Part
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url() ?>logistik/komponen">Transaksi Komp Baru</a>
                            <a class="dropdown-item" href="<?= base_url() ?>logistik/formKomponenM">Transaksi Komp Masuk</a>
                            <a class="dropdown-item" href="<?= base_url() ?>logistik/formKomponenK">Transaksi Komp Keluar</a>
                            <!-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </li>
                    <a href="<?= base_url() ?>" class="btn btn-primary">Beranda</a>
                    <a href="<?= base_url(); ?>auth/logout" class="btn btn-primary">Log out</a>
                </div>
            </div>
        </div>
    </nav>