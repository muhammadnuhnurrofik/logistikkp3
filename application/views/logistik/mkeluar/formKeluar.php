<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4"></h1>


    <div class="container">

        <div class="row">
            <div class="row-bar">
                <div class="table-responsive">
                    <h3>Silahkan cari material yang akan di entri di kolom search</h3>
                    <a href="<?= base_url(); ?>logistik/keluar" class="btn btn-primary mb-4">List Mat'l Keluar</a>
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
                                <th>Qty</th>
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
                                        <a href="<?= base_url(); ?>logistik/detailKeluar/<?= $people['id']; ?>" class="badge badge-warning">detail</a>
                                        <a href="<?= base_url(); ?>logistik/ubahKeluar/<?= $people['id']; ?>" class="badge badge-success">input</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <?= $this->pagination->create_links(); ?>


                </div>
            </div>
        </div>




    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->