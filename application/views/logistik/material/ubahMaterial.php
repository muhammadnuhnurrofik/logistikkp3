<div class="container">

    <br>
    <div class="row-mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-white bg-primary">
                    Form Ubah Data Material
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $peoples['id'] ?>">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="idno">Id Number (IDNO)</label>
                                    <input type="text" class="form-control" id="idno" name="idno" value="<?= $peoples['idno'] ?>">
                                    <small class="form-text text-danger"><?= form_error('idno') ?></small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Material Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $peoples['name'] ?>">
                                    <small class="form-text text-danger"><?= form_error('name') ?></small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="spec">Material Specification</label>
                                    <input type="text" class="form-control" id="spec" name="spec" value="<?= $peoples['spec'] ?>">
                                    <small class="form-text text-danger"><?= form_error('spec') ?></small>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="unit">Unit</label>
                                    <input type="text" class="form-control" id="unit" name="unit" value="<?= $peoples['unit'] ?>">
                                    <small class="form-text text-danger"><?= form_error('unit') ?></small>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="program">Program</label>
                                    <input type="text" class="form-control" id="program" name="program" value="<?= $peoples['program'] ?>">
                                    <small class="form-text text-danger"><?= form_error('program') ?></small>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="location">Store Location</label>
                                    <input type="text" class="form-control" id="location" name="location" value="<?= $peoples['location'] ?>">
                                    <small class="form-text text-danger"><?= form_error('location') ?></small>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="suppl">Supplier</label>
                                <input type="text" class="form-control" id="suppl" name="suppl" value="<?= $peoples['suppl'] ?>">
                                <small class="form-text text-danger"><?= form_error('suppl') ?></small>

                            </div>
                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="text" class="form-control" id="qty" name="qty" value="<?= $peoples['qty'] ?>">
                                <small class="form-text text-danger"><?= form_error('qty') ?></small>

                            </div>
                            <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                            <a href="<?= base_url() ?>logistik/material" type="submit" name="input" class="btn btn-primary">Back</a>
                        </form>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>