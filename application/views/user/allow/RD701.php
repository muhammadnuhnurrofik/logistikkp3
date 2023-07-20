<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4"></h1>


    <div class="container">



        <div class="row">

            <div class="col-md">
                <h3>List Materials/Komponen <?= $nama ?> per <?= date('d F Y'); ?></h3>
            </div>

        </div>


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
                            <th>model</th>
                            <th>Stok</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($komponen as $komp) : ?>
                            <tr>
                                <th><?= $i; ?></th>
                                <td><?= $komp['idno']; ?></td>
                                <td><?= $komp['name']; ?></td>
                                <td><?= $komp['spec']; ?></td>
                                <td><?= $komp['unit']; ?></td>
                                <td><?= $komp['model']; ?></td>
                                <td><?= $komp['qty']; ?></td>
                                <td><?= $komp['ket']; ?></td>
                            </tr>
                            <?php $i++; ?>
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
<br><br><br><br><br><br><br><br>