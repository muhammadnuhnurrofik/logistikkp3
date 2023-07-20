<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4"></h1>


    <div class="container">

        <div class="row">
            <div class="row-bar">
                <div class="table-responsive">
                    <h3>Silahkan cari material yang akan di entri di kolom search</h3>
                    <a href="<?= base_url(); ?>logistik/komponenk" class="btn btn-primary mb-4">List Mat'l Keluar</a>
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
                                <th>model</th>
                                <th>Source</th>
                                <th>Stok</th>
                                <th>Action</th>
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
                                    <td>
                                        <a href="<?= base_url(); ?>logistik/detailKomponenK/<?= $komp['id']; ?>" class="badge badge-warning">detail</a>
                                        <a href="<?= base_url(); ?>logistik/ubahKomponenK/<?= $komp['id']; ?>" class="badge badge-success">input</a>
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