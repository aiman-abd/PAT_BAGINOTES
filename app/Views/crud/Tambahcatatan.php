<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
    <div class="col-sm-12 mb-4">
        <h3 class="m-0"><?= (isset($pageTitle)) ? $pageTitle : 'Document'; ?></h3>
    </div>
    <div class="card mb-4">
    <div class="card-body">
        <form action="<?php echo base_url('api/upload'); ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Judul Catatan</label>
                <input type="email" class="form-control" id="title" placeholder="Judul Catatan">
            </div>
            <div class="mb-3">
                <label for="subjek" class="form-label">Pilih Subjek</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Pilih File</label>
                <input class="form-control" type="file" name="file" id="formFileMultiple" multiple>
            </div>
            <hr>
            <button type="submit" class="btn btn-dark">Upload</button>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>