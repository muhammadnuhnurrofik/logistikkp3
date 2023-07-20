<div class="container">
    <br>

    <div class="row-mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-white bg-primary">
                    Form Tambah Data Material
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="idno">Id Number (IDNO)</label>
                                    <input type="text" class="form-control" id="idno" name="idno">
                                    <small class="form-text text-danger"><?= form_error('idno') ?></small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tgl">Tanggal</label>
                                    <input type="date" class="form-control" id="tgl" name="tgl">
                                    <small class="form-text text-danger"><?= form_error('tgl') ?></small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="reff">Referensi</label>
                                    <input type="text" class="form-control" id="reff" name="reff">
                                    <small class="form-text text-danger"><?= form_error('reff') ?></small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Material Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                    <small class="form-text text-danger"><?= form_error('name') ?></small>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="spec">Material Specification</label>
                                    <input type="text" class="form-control" id="spec" name="spec">
                                    <small class="form-text text-danger"><?= form_error('spec') ?></small>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="unit">Unit</label>
                                    <input type="text" class="form-control" id="unit" name="unit">
                                    <small class="form-text text-danger"><?= form_error('unit') ?></small>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="qou">QoU</label>
                                    <input type="text" class="form-control" id="qou" name="qou">
                                    <small class="form-text text-danger"><?= form_error('qou') ?></small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="model">Model</label>
                                    <input type="text" class="form-control" id="model" name="model">
                                    <small class="form-text text-danger"><?= form_error('model') ?></small>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="source">Source</label>
                                <input type="text" class="form-control" id="source" name="source">
                                <small class="form-text text-danger"><?= form_error('source') ?></small>

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