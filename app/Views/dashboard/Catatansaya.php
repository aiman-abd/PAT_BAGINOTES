<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="card mb-4">
    <div class="card-header"><strong>Catatan Saya</strong><span class="small ms-1"></span></div>
    <div class="card-body">
        <div class="example">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-512" role="tab" aria-selected="true">
                        <svg class="icon me-2">
                            <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-short-text"></use>
                        </svg>Catatan</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
                <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-512">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Judul</th>
                                <th scope="col">Subjek</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
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