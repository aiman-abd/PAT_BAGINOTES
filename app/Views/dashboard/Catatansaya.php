<?php
$db = \Config\Database::connect();
$query_catatan = $db->query("SELECT id, judul, subjek, berkas FROM catatan_saya");
$results_catatan = $query_catatan->getResultArray();
?>

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
                        </svg>Catatan</a>
                </li>
            </ul>
            <div class="tab-content rounded-bottom">
                <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-5container-fluid12">
                    <table class="table" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">ID Catatan</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Subjek</th>
                                <th scope="col">Berkas</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results_catatan as $row) { ?>
                                <tr>
                                    <th scope='row'><?= $row['id'] ?></th>
                                    <td><?= $row['judul'] ?></td>
                                    <td><?= $row['subjek'] ?></td>
                                    <td><?= $row['berkas'] ?></td>
                                    <td>
                                        <a class="btn btn-dark" type="button">
                                            <svg class="icon">
                                                <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-cloud-download"></use>
                                            </svg>
                                        </a>
                                        <a class='btn btn-secondary' type='button' href="<?php echo base_url('deletecatatan/' . $row['id']) ?>">
                                            <svg class='icon'>
                                                <use xlink:href='dist/vendors/@coreui/icons/svg/free.svg#cil-trash'></use>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            <?php   } ?>
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