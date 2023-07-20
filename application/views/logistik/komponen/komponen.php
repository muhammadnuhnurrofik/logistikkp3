<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4"></h1>

    <div class="container">

        <?php if ($this->session->flashdata()) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data komponen <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>


        <div class="row">
            <div class="col-md">
                <div class="table-responsive">
                    <h3>List Komponen</h3>
                    <a href="<?= base_url(); ?>logistik/tambahKomponen" class="btn btn-primary mb-4">Tambah Data Komponen</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md">
                <table class="table table-hover" id="tabel">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>IdNo</th>
                            <th style="width: 22%;">Nama</th>
                            <th style="width: 10%;">Spesifikasi</th>
                            <th>Unit</th>
                            <th>model</th>
                            <th>Source</th>
                            <th>Stok</th>
                            <th>Ket</th>
                            <th style="width: 14%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($komponen as $komp) : ?>
                            <tr>
                                <th><?= ++$start ?></th>
                                <td><?= $komp['idno']; ?></td>
                                <td><?= $komp['name']; ?></td>
                                <td><?= $komp['spec']; ?></td>
                                <td><?= $komp['unit']; ?></td>
                                <td><?= $komp['model']; ?></td>
                                <td><?= $komp['source']; ?></td>
                                <td><?= $komp['qty']; ?></td>
                                <td><?= $komp['ket']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>logistik/detailKomponen/<?= $komp['id']; ?>" class="badge badge-warning">detail</a>
                                    <a href="<?= base_url(); ?>logistik/ubahKomponen/<?= $komp['id']; ?>" class="badge badge-success">edit</a>
                                    <a href="<?= base_url(); ?>logistik/hapusKomponen/<?= $komp['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin???');">delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->