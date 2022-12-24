<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-12">
    <div class="card mb-4">
        <div class="card-header"><strong>Catatan Baru</strong><span class="small ms-1"></span></div>
        <div class="card-body">
            <div class="example">
                <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1252">
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">Judul</label>
                            <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="Masukkan Judul Catatan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">Subjek</label>
                            <select class="form-select" aria-label="Default select example">
<option selected="">Open this select menu</option>
<option value="1">One</option>
<option value="2">Two</option>
 <option value="3">Three</option>
</select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>