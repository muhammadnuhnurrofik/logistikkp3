<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">


            <div class="card">
                <div class="card-header">
                    Detail Data Komponen
                </div>
                <div class="card-body">
                    <h5 class="card-title">Material name =<?= $komponen['name']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Specification/Part Number=<?= $komponen['spec']; ?></h6>
                    <p class="card-text">Model=<?= $komponen['model']; ?></p>
                    <a href="<?= base_url(); ?>logistik/formkomponenk" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>