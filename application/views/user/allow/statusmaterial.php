<div class="container">
    <br>
    <div class="row mt-1">
        <div class="col md">
            <h3>Status Komponen Import per <?= date('d F Y'); ?></h3>
        </div>
    </div>
    <br>
    <div class="row mt-1">
        <div class="col-md">
            <div class="card-deck">
                <div class="card text-white bg-primary mb-3" style="max-width: 12rem;">
                    <div class="card-header text-center" style="font-size: 30px">Propellant</div>
                    <div class="card-body">
                        <?php foreach ($propmk as $prop) : ?>
                            <h5 class="card-title">RD7010/RD701</h5>
                            <p class="card-text"><?= $prop['qty']; ?></p>
                        <?php endforeach; ?>
                        <?php foreach ($proprd as $prop) : ?>
                            <h5 class="card-title">RD702</h5>
                            <p class="card-text"><?= $prop['qty']; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card text-white bg-secondary mb-3" style="max-width: 12rem;">
                    <div class="card-header text-center" style="font-size: 30px">Tube</div>
                    <div class="card-body">
                        <?php foreach ($tubemk as $tube) : ?>
                            <h5 class="card-title">RD7010/RD701</h5>
                            <p class="card-text"> <?= $tube['qty']; ?></p>
                        <?php endforeach; ?>
                        <?php foreach ($tuberd as $tube) : ?>
                            <h5 class="card-title">RD702</h5>
                            <p class="card-text"> <?= $tube['qty']; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card text-white bg-info mb-3" style="max-width: 12rem;">
                    <div class="card-header text-center" style="font-size: 28px">Nozzle Assy</div>
                    <div class="card-body">
                        <?php foreach ($n7010 as $n) : ?>
                            <h5 class="card-title">RD7010</h5>
                            <p class="card-text"><?= $n['qty']; ?></p>
                        <?php endforeach; ?>
                        <?php foreach ($n701 as $n) : ?>
                            <h5 class="card-title">RD701</h5>
                            <p class="card-text"><?= $n['qty']; ?></p>
                        <?php endforeach; ?>
                        <?php foreach ($n702 as $n) : ?>
                            <h5 class="card-title">RD702</h5>
                            <p class="card-text"><?= $n['qty']; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card text-white bg-success mb-3" style="max-width: 12rem;">
                    <div class="card-header text-center" style="font-size: 30px">Igniter</div>
                    <div class="card-body">
                        <?php foreach ($ignmk as $ign) : ?>
                            <h5 class="card-title">RD7010/RD701</h5>
                            <p class="card-text"><?= $ign['qty']; ?></p>
                        <?php endforeach; ?>
                        <?php foreach ($ignrd as $ign) : ?>
                            <h5 class="card-title">RD702</h5>
                            <p class="card-text"><?= $ign['qty']; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card text-white bg-warning mb-3" style="max-width: 12rem;">
                    <div class="card-header text-center" style="font-size: 30px">Stab. Rod</div>
                    <div class="card-body">
                        <?php foreach ($stbmk as $stb) : ?>
                            <h5 class="card-title">RD7010/RD701</h5>
                            <p class="card-text"><?= $stb['qty']; ?></p>
                        <?php endforeach; ?>
                        <?php foreach ($stbrd as $stb) : ?>
                            <h5 class="card-title">RD702</h5>
                            <p class="card-text"><?= $stb['qty']; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-1">
        <div class="col md">
            <br>
            <h3>Status komponen roket/warhead per <?= date('d F Y'); ?></h3>
            <a type="button" class="btn btn-primary" href="<?= base_url('user/materialLokal') ?>">
                Komp Lokal
            </a>
            <a type="button" class="btn btn-secondary" href="<?= base_url('user/RD7010') ?>">
                RD7010
            </a>
            <a type="button" class="btn btn-info" href="<?= base_url('user/RD701') ?>">
                RD701
            </a>
            <a type="button" class="btn btn-success" href="<?= base_url('user/RD702') ?>">
                RD702
            </a>
            <a type="button" class="btn btn-warning" href="<?= base_url('user/FZ32') ?>">
                FZ-32
            </a>
            <a type="button" class="btn btn-primary" href="<?= base_url('user/innert') ?>">
                Innert
            </a>
        </div>
    </div>
</div>

</div>
<br><br><br><br>