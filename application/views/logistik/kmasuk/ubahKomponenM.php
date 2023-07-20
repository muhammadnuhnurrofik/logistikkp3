<br>
<div class="container">

    <div class="row-mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-white bg-primary">
                    Transaksi Material Masuk
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="idno">Id Number (IDNO)</label>
                            <input type="text" class="form-control" id="idno" name="idno" readonly value="<?= $kmasuk['idno']; ?>">
                            <small class="form-text text-danger"><?= form_error('idno') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl">Tanggal</label>
                            <input type="date" class="form-control" id="tgl" name="tgl">
                            <small class="form-text text-danger"><?= form_error('tgl') ?></small>

                        </div>
                        <div class="form-group">
                            <label for="reff">Referensi</label>
                            <input type="text" class="form-control" id="reff" name="reff">
                            <small class="form-text text-danger"><?= form_error('reff') ?></small>

                        </div>
                        <div class="form-group">
                            <label for="supplier">Supplier</label>
                            <input type="text" class="form-control" id="supplier" name="supplier">
                            <small class="form-text text-danger"><?= form_error('supplier') ?></small>

                        </div>
                        <div class="form-group">
                            <label for="jml">Qty</label>
                            <input type="text" class="form-control" id="jml" name="jml">
                            <small class="form-text text-danger"><?= form_error('jml') ?></small>

                        </div>
                        <button type="submit" name="input" class="btn btn-primary float-right">Input data</button>
                        <a href="<?= base_url() ?>logistik/formKomponenM" type="submit" name="input" class="btn btn-primary">Back</a>
                </div>
            </div>


        </div>
    </div>

</div>