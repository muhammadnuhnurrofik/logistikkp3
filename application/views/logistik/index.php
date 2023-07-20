<div class="container">
    <br>
    <div class="row mt-1">
        <div class="col md">
            <h3>TRANSAKSI MATERIAL LOGISTIK KP.3, TASIKMALAYA <?= date('d F Y'); ?></h3>
        </div>
    </div>
    <br>
    <div class="row mt-1">
        <div class="col-md">
            <div class="card-deck">
                <div class="card text-white bg-primary mb-3" style="max-width: 35rem;">
                    <div class="card-header text-center text-white" style="font-size: 30px">Raw Material</div>
                    <div class="card-body">
                        <div class="col">
                            <a type="button" class="btn btn-success" href="<?= base_url('logistik/material') ?>">
                                New Material
                            </a>
                            <a type="button" class="btn btn-info" href="<?= base_url('logistik/form') ?>">
                                Material Masuk
                            </a>
                            <a type="button" class="btn btn-dark" href="<?= base_url('logistik/formKeluar') ?>">
                                Material Keluar
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card text-white bg-secondary mb-3" style="max-width: 35rem;">
                    <div class="card-header text-center text-white" style="font-size: 30px">Komponen</div>
                    <div class="card-body">
                        <div class="col-md">
                            <a type="button" class="btn btn-success" href="<?= base_url('logistik/komponen') ?>">
                                New Komponen
                            </a>
                            <a type="button" class="btn btn-info" href="<?= base_url('logistik/formKomponenM') ?>">
                                Komponen Masuk
                            </a>
                            <a type="button" class="btn btn-dark" href="<?= base_url('logistik/formKomponenK') ?>">
                                Komponen Keluar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container">
    <div class="row mt-1">
        <div class="col-md">
            <div class="card-deck">
                <div class="card text-white bg-info mb-3" style="max-width: 35rem;">
                    <div class="card-header text-center text-body" style="font-size: 30px">List Transaksi Material</div>
                    <div class="card-body">
                        <div class="col-md">
                            <a type="button" class="btn btn-primary" href="<?= base_url('logistik/masuk') ?>">
                                Transaksi Material Masuk
                            </a>
                            <a type="button" class="btn btn-dark" href="<?= base_url('logistik/Keluar') ?>">
                                Transaksi Material Keluar
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card text-white bg-warning mb-3" style="max-width: 35rem;">
                    <div class="card-header text-body text-center" style="font-size: 30px">List Transaksi Komponen</div>
                    <div class="card-body">
                        <div class="col-md">
                            <a type="button" class="btn btn-primary" href="<?= base_url('logistik/komponenM') ?>">
                                Transaksi Komponen Masuk
                            </a>
                            <a type="button" class="btn btn-dark" href="<?= base_url('logistik/komponenK') ?>">
                                Transaksi Komponen Keluar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>