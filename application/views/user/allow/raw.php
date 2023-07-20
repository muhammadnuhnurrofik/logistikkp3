<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4"></h1>


    <div class="container">

        <!-- <div class="row mt-3">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>material/tambah" class="btn btn-primary mb-4">Tambah Data Material</a>
            </div>
        </div> -->


        <h3 class="mt-3">List of Materials per <?= date('d F Y'); ?></h3>


        <div class="row">
            <div class="col-md">
                <table class="table table-hover" id="tabel1">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>IdNo</th>
                            <th>Nama</th>
                            <th>Spesifikasi/Part No.</th>
                            <th>Unit</th>
                            <th>Program</th>
                            <th>Lokasi</th>
                            <th>Qty</th>
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
<br><br><br><br><br><br>