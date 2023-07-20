<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4"></h1>
    <div class="container">

        <div class="row">
            <div class="col-md">
                <h3>Daftar Transaksi Masuk Komponen</h3>
                <a class="btn btn-primary mb-3" href="<?= base_url(); ?>logistik/formKomponenM" role="button">More input</a>
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
                            <th>Unit</th>
                            <th>Model</th>
                            <th>Source</th>
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
                                <td><?= $m['reff']; ?></td>
                                <td><?= $m['name']; ?></td>
                                <td><?= $m['spec']; ?></td>
                                <td><?= $m['unit']; ?></td>
                                <td><?= $m['model']; ?></td>
                                <td><?= $m['source']; ?></td>
                                <td><?= $m['jml']; ?></td>
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