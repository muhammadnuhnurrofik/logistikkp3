<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card">
        <h5 class="card-header">Selamat datang di Bidang Logistik KP.3</h5>
        <div class="card-body">
            <h5 class="card-title">Selamat datang</h5>
            <p class="card-text">Bersama-sama, mari kita majukan PTDI, Jaya Jaya Jaya.....
                <!-- <br><br> Pilih menu di bawah ini untuk melakukan transaksi material baru! -->
                <br><br>
                <!-- <a href="<?= base_url(); ?>material" class="btn btn-primary">Material Masuk (baru)</a> -->

                <!-- <br><br> Pilih menu di bawah ini untuk melakukan transaksi stok material! -->
                <br><br>
                <!-- <a href="#" class="btn btn-primary">Material Masuk </a>
                <a href="#" class="btn btn-primary">Material Keluar </a> -->
                <a type="button" class="btn btn-primary" href="<?= base_url('UserDetails/index') ?>">
                    User detail
                </a>
            </p>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->