<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-6 col-lg-3">
        <div class="card" style="width: 18rem;">
            <img src="dist/assets/img/full.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Probabilitas dan Statistika</h5>
                <a href="<?= route_to('user.probstat'); ?>" class="btn btn-dark">Go somewhere</a>
            </div>
        </div>
    </div>
<div>
<br>
<?= $this->endSection(); ?>