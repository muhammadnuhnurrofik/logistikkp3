<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4"></h1>
    <div class="container">

        <div class="row">
            <div class="col-md">
                <h3>Daftar Material Keluar</h3>
                <a class="btn btn-primary mb-3" href="<?= base_url(); ?>logistik/formKeluar" role="button">More input</a>
            </div>
        </div>


        <div class="row">
            <div class="col-md">
                <table class="table table-hover" id="tabel">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>IdNo</th>
                            <th>Tanggal</th>
                            <th>IdTrx</th>
                            <th>Nama</th>
                            <th>Spesifikasi</th>
                            <th>Unit</th>
                            <th>User</th>
                            <th>Lokasi</th>
                            <th>Qty</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($metu as $m) : ?>
                            <tr>
                                <th><?= ++$start ?></th>
                                <td><?= $m['idno']; ?></td>
                                <td><?= $m['tgl']; ?></td>
                                <td><?= $m['idtrx']; ?></td>
                                <td><?= $m['name']; ?></td>
                                <td><?= $m['spec']; ?></td>
                                <td><?= $m['unit']; ?></td>
                                <td><?= $m['user']; ?></td>
                                <td><?= $m['location']; ?></td>
                                <td><?= $m['jml_k']; ?></td>
                                <td><?= $m['qty']; ?></td>
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