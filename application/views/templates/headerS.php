<!doctype html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/vendor/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <!-- datatables button -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">




</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
        <div class="container">
            <a class="h3 navbar-brand text-white" href="<?= base_url(); ?>user/statusMaterial">Logistik KP3</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Komponen / Part
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url() ?>user/materialImport">Mat'l Import</a>
                            <a class="dropdown-item" href="<?= base_url() ?>user/materialLokal">Mat'l Lokal</a>
                            <a class="dropdown-item" href="<?= base_url() ?>user/RD7010">Mat'l RD7010</a>
                            <a class="dropdown-item" href="<?= base_url() ?>user/RD701">Mat'l RD701</a>
                            <a class="dropdown-item" href="<?= base_url() ?>user/RD702">Mat'l RD702</a>
                            <a class="dropdown-item" href="<?= base_url() ?>user/FZ32">Mat'l FZ-32</a>
                            <a class="dropdown-item" href="<?= base_url() ?>user/Innert">Mat'l Innert</a>
                            <!-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </li>
                    <a class="nav-item nav-link text-white" href="<?= base_url() ?>user/raw">Raw Mat</a>
                    <a href="<?= base_url() ?>" class="btn btn-primary">Beranda</a>
                    <a href="<?= base_url(); ?>auth/logout" class="btn btn-primary">Log out</a>
                </div>
            </div>
        </div>
    </nav>