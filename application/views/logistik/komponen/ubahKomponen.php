<div class="container">
    <br>

    <div class="row-mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-white bg-primary">
                    Form Ubah Data Komponen
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $komponen['id']; ?>">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="idno">Id Number (IDNO)</label>
                                    <input type="text" class="form-control" id="idno" name="idno" value="<?= $komponen['idno']; ?>">
                                    <small class="form-text text-danger"><?= form_error('idno') ?></small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Material Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $komponen['name']; ?>">
                                    <small class="form-text text-danger"><?= form_error('name') ?></small>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="spec">Material Specification</label>
                                    <input type="text" class="form-control" id="spec" name="spec" value="<?= $komponen['spec']; ?>">
                                    <small class="form-text text-danger"><?= form_error('spec') ?></small>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="unit">Unit</label>
                                    <input type="text" class="form-control" id="unit" name="unit" value="<?= $komponen['unit']; ?>">
                                    <small class="form-text text-danger"><?= form_error('unit') ?></small>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="qou">QoU</label>
                                    <input type="text" class="form-control" id="qou" name="qou" value="<?= $komponen['qou']; ?>">
                                    <small class="form-text text-danger"><?= form_error('qou') ?></small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="model">Model</label>
                                    <input type="text" class="form-control" id="model" name="model" value="<?= $komponen['model']; ?>">
                                    <small class="form-text text-danger"><?= form_error('model') ?></small>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="source">Source</label>
                                <input type="text" class="form-control" id="source" name="source" value="<?= $komponen['source']; ?>">
                                <small class="form-text text-danger"><?= form_error('source') ?></small>

                            </div>
                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="text" class="form-control" id="qty" name="qty" value="<?= $komponen['qty']; ?>">
                                <small class="form-text text-danger"><?= form_error('qty') ?></small>

                            </div>
                            <div class="form-group">
                                <label for="ket">Ket</label>
                                <input type="text" class="form-control" id="ket" name="ket" value="<?= $komponen['ket']; ?>">
                                <small class="form-text text-danger"><?= form_error('ket') ?></small>

                            </div>
                            <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                            <a href="<?= base_url() ?>logistik/komponen" type="submit" name="input" class="btn btn-primary">Back</a>
                        </form>
                </div>
            </div>


        </div>
    </div>

</div>