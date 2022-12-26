<?php
$query_subjek = $db->query("SELECT id, subjek FROM kelas");
$results_subjek = $query_subjek->getResultArray();
?>

<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-sm-12 mb-4">
    <h3 class="m-0"><?= (isset($pageTitle)) ? $pageTitle : 'Document'; ?></h3>
</div>
<div class="card mb-4">
    <div class="card-body">
        <form action="<?= route_to('user.upload') ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Judul Catatan</label>
                <input type="text" class="form-control" id="title" placeholder="Judul Catatan" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="subjek" class="form-label">Pilih Subjek</label>
                <select class="form-select" aria-label="Default select example" name="subjek" required>
                    <option selected disabled value="">--Pilih Subjek--</option>
                    <?php foreach ($results_subjek as $row) {
                        echo "<option value=" . $row['subjek'] . ">" . $row['subjek'] . "</option>";
                    };
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Pilih File</label>
                <input class="form-control" type="file" name="file" id="formFileMultiple" multiple>
            </div>
            <hr>
            <input type="submit" class="btn btn-dark" value="Upload"></input>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>