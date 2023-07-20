<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4"></h1>
    <div class="container">

        <div class="row">
            <div class="col-md">
                <h3 class="mt-3">Daftar Material Masuk</h3>
                <a class="btn btn-primary mb-3" href="<?= base_url(); ?>logistik/form" role="button">More input</a>
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
                            <th>Reff</th>
                            <th>Nama</th>
                            <th>Spesifikasi</th>
                            <th>Lokasi</th>
                            <th>Supplier</th>
                            <th>Qty</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($row as $r) : ?>
                            <tr>
                                <th><?= ++$start ?></th>
                                <td><?= $r['idno']; ?></td>
                                <td><?= $r['tgl']; ?></td>
                                <td><?= $r['idtrx']; ?></td>
                                <td><?= $r['reff']; ?></td>
                                <td><?= $r['name']; ?></td>
                                <td><?= $r['spec']; ?></td>
                                <td><?= $r['location']; ?></td>
                                <td><?= $r['supplier']; ?></td>
                                <td><?= $r['jml']; ?></td>
                                <td><?= $r['qty']; ?></td>
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