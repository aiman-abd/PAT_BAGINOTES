<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
    <div class="col-sm-12 mb-4">
        <h3 class="m-0"><?= (isset($pageTitle)) ? $pageTitle : 'Document'; ?></h3>
    </div>
    <div class="card mb-4">
    <div class="card-body">
        <form action="<?php echo base_url('api/upload'); ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Nama Kelas / Mata Kuliah</label>
                <input type="email" class="form-control" id="title" placeholder="Nama Kelas">
            </div>
            <button type="submit" class="btn btn-dark">Upload</button>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>