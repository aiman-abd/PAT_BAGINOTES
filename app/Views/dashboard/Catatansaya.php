<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="card mb-4">
    <div class="card-header"><strong>Catatan Saya</strong><span class="small ms-1"></span></div>
    <div class="card-body">
        <div class="example">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-512" role="tab" aria-selected="true">
<<<<<<< HEAD
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
=======
                    <svg class="icon me-2">
                        <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-short-text"></use>
                    </svg>Catatan</a>
                </li>
            </ul>
            <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-512">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Subjek</th>
                                <th scope="col">Berkas</th>
>>>>>>> 70a51963c12c2180c212f4a20ebb2ece85661b46
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
<<<<<<< HEAD
                                
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
=======
                                <th scope="row">1</th>
                                <td>Regressi Linier</td>
                                <td>Probabilika dan Statistika</td>
                                <td>P12 - Regressi Linier.pdf</td>
                                <td>
                                    <button class="btn btn-dark" type="button">
                                    <svg class="icon">
                                        <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-cloud-download"></use>
                                    </svg>
                                    </button>
                                    <button class="btn btn-secondary" type="button">
                                    <svg class="icon">
                                        <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                                    </svg>
                                    </button>
                                </td>
>>>>>>> 70a51963c12c2180c212f4a20ebb2ece85661b46
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