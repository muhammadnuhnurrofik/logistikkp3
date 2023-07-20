<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">


            <div class="card">
                <div class="card-header">
                    Detail Data Material
                </div>
                <div class="card-body">
                    <h5 class="card-title">Material name=<?= $peoples['name']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Specification=<?= $peoples['spec']; ?></h6>
                    <p class="card-text">Location=<?= $peoples['location']; ?></p>
                    <a href="<?= base_url(); ?>logistik/material" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>