<br>
<div class="container">

    <div class="row-mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-white bg-primary">
                    Transaksi Material Keluar
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="idno">Id Number (IDNO)</label>
                            <input type="text" class="form-control" id="idno" name="idno" readonly value="<?= $kkeluar['idno']; ?>">
                            <small class="form-text text-danger"><?= form_error('idno') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl">Tanggal</label>
                            <input type="date" class="form-control" id="tgl" name="tgl">
                            <small class="form-text text-danger"><?= form_error('name') ?></small>

                        </div>
                        <div class="form-group">
                            <label for="mt">Material Ticket</label>
                            <input type="text" class="form-control" id="mt" name="mt">
                            <small class="form-text text-danger"><?= form_error('mt') ?></small>

                        </div>
                        <div class="form-group">
                            <label for="reff">Referensi</label>
                            <input type="text" class="form-control" id="reff" name="reff">
                            <small class="form-text text-danger"><?= form_error('reff') ?></small>

                        </div>
                        <div class="form-group">
                            <label for="user">User</label>
                            <select class="form-control" id="user" name="user">
                                <option>PPC</option>
                                <option>ENGINEERING</option>
                                <option>PRODUKSI</option>
                                <option>MAINTENANCE</option>
                                <option>QUALITY</option>
                                <option>LAIN-LAIN</option>
                            </select>
                            <small class="form-text text-danger"><?= form_error('user') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jml_k">Qty</label>
                            <input type="text" class="form-control" id="jml_k" name="jml_k">
                            <small class="form-text text-danger"><?= form_error('jml_k') ?></small>

                        </div>
                        <button type="submit" name="input" class="btn btn-primary float-right">Input data</button>
                        <a href="<?= base_url() ?>logistik/formKomponenK" type="submit" name="input" class="btn btn-primary">Back</a>
                </div>
            </div>


        </div>
    </div>

</div>