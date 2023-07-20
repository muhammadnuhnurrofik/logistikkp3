<div class="container">

    <div class="row-mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-white bg-primary">
                    Form Tambah Data Material
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <form>
                            <div class="form-group">
                                <label for="idno">Id Number (IDNO)</label>
                                <input type="text" class="form-control" id="idno" name="idno" readonly value="<?= $peoples['idno']; ?>">
                                <small class="form-text text-danger"><?= form_error('idno') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="name">Material Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                                <small class="form-text text-danger"><?= form_error('name') ?></small>

                            </div>
                            <div class="form-group">
                                <label for="spec">Material Specification</label>
                                <input type="text" class="form-control" id="spec" name="spec">
                                <small class="form-text text-danger"><?= form_error('spec') ?></small>

                            </div>
                            <div class="form-group">
                                <label for="unit">Unit</label>
                                <input type="text" class="form-control" id="unit" name="unit">
                                <small class="form-text text-danger"><?= form_error('unit') ?></small>

                            </div>
                            <div class="form-group">
                                <label for="program">Program</label>
                                <input type="text" class="form-control" id="program" name="program">
                                <small class="form-text text-danger"><?= form_error('program') ?></small>

                            </div>
                            <div class="form-group">
                                <label for="location">Store Location</label>
                                <input type="text" class="form-control" id="location" name="location">
                                <small class="form-text text-danger"><?= form_error('location') ?></small>

                            </div>
                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="text" class="form-control" id="qty" name="qty">
                                <small class="form-text text-danger"><?= form_error('qty') ?></small>

                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                        </form>
                </div>
            </div>


        </div>
    </div>

</div>