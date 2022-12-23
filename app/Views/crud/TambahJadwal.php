<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
    <div class="col-sm-12 mb-4">
        <h1 class="m-0"><?= (isset($pageTitle)) ? $pageTitle : 'Document'; ?></h1>
    </div>

<?= $this->endSection(); ?>