<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4"></h1>

    <div class="container">

        <?php if ($this->session->flashdata()) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Material <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>


        <div class="row">

            <div class="col">
                <h3>List of Materials</h3>
                <a href="<?= base_url(); ?>logistik/tambahMaterial" class="btn btn-primary mb-4">Tambah Data Material</a>
            </div>


        </div>

        <div class="row">
            <div class="col-md">
                <table class="table table-hover" id="tabel">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>IdNo</th>
                            <th>Nama</th>
                            <th>Spesifikasi</th>
                            <th>Unit</th>
                            <th>Program</th>
                            <th>Lokasi</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($peoples as $people) : ?>
                            <tr>
                                <th><?= ++$start ?></th>
                                <td><?= $people['idno']; ?></td>
                                <td><?= $people['name']; ?></td>
                                <td><?= $people['spec']; ?></td>
                                <td><?= $people['unit']; ?></td>
                                <td><?= $people['program']; ?></td>
                                <td><?= $people['location']; ?></td>
                                <td><?= $people['qty']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>logistik/detailMaterial/<?= $people['id']; ?>" class="badge badge-warning">detail</a>
                                    <a href="<?= base_url(); ?>logistik/ubahMaterial/<?= $people['id']; ?>" class="badge badge-success">edit</a>
                                    <a href="<?= base_url(); ?>logistik/hapus/<?= $people['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin???');">delete</a>
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