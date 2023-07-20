<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">


            <div class="card">
                <div class="card-header">
                    Detail Data Material
                </div>
                <div class="card-body">
                    <h5 class="card-title">Material name=<?= $peoples['name']; ?></h5>
                    <p class="card-subtitle mb-2">Specification=<?= $peoples['spec']; ?></p>
                    <p class="card-text">Location=<?= $peoples['location']; ?></p>
                    <p class="card-text">Program=<?= $peoples['program']; ?></p>
                    <a href="<?= base_url(); ?>logistik/form" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>