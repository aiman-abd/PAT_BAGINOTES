<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="card mb-4">
    <div class="card-body">
        <div class="example">
        <div class="col-sm-12 p-3">
            <h3 class="m-0"><?= (isset($pageTitle)) ? $pageTitle : 'Document'; ?></h3>
        </div>
            <div class="tab-content rounded-bottom">
                <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-512">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Penulis</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Berkas</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mark</td>
                                <td>Heya</td>
                                <td>heya.pdf</td>
                                <td>
                                <?php
                                    $tanggal = mktime(date('m'), date("d"), date('Y'));
                                    echo date("d-m-Y", $tanggal );
                                    date_default_timezone_set("Asia/Jakarta");
                                    $jam = date ("H:i:s");
                                    echo " $jam";
                                ?></td>
                                <td>
                                    <button class="btn btn-dark" type="button">
                                    <svg class="icon">
                                        <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-cloud-download"></use>
                                    </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a class="btn btn-dark" type="button" href="<?= route_to('user.tambahcatatan') ?>">
            <svg class="icon me-2">
            <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-note-add"></use>
            </svg>Tambah Catatan
        </a>
    </div>
</div>

<?= $this->endSection(); ?>