<?php
$db = \Config\Database::connect();

$query_kelas = $db->query("SELECT id, subjek FROM kelas");
$results_kelas = $query_kelas->getResultArray();
?>


<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <!-- <div class="col-sm-12 mb-4">
                <h1 class="m-0"><?= (isset($pageTitle)) ? $pageTitle : 'Document'; ?></h1>
            </div> -->
    <div class="row">
        <h3 class="m-0 mb-3">Overview</h3>
        <div class="col-sm-4 col-lg-2">
            <div class="card mb-4 text-dark bg-white">
                <div class="card-body pb-2 d-flex justify-content-between align-items-start">
                    <div>
                        <span class="fs-6 fw-bold">
                            <svg class="icon">
                                <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-arrow-circle-top"></use>
                            </svg>
                        </span>
                        <div>Unggah</div>
                        <div class="fs-4 fw-bold">
                            <h1>1</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-4 col-lg-2">
            <div class="card mb-4 text-white bg-dark">
                <div class="card-body pb-2 d-flex justify-content-between align-items-start">
                    <div>
                        <span class="fs-6 fw-bold">
                            <svg class="icon">
                                <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-arrow-circle-bottom"></use>
                            </svg>
                        </span>
                        <div>Unduh</div>
                        <div class="fs-4 fw-bold">
                            <h1>1</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card mb-4">
            <div class="card-header"><strong>Kelas-Kelas</strong><span class="small ms-1"></span><span class="small ms-1"></span></div>
            <div class='row row-cols-1 row-cols-md-4 g-4'>
                <?php foreach ($results_kelas as $row) {
                    echo "<div class='col p-3'>";
                    // echo    "<a href=".route_to('user.subjek').">";
                    echo "<div class='card h-100'>";
                    echo     "<img src='dist/assets/img/full.jpg' class='card-img-top' alt='...'>";
                    echo "<div class='card-body'>";
                    echo "<h6 class='card-title'>" . $row['subjek'] . "</h5>";
                    echo "</div>";
                    echo  "<div class='card-footer px-3 py-2'>
                            <a class='btn-block text-medium-emphasis d-flex justify-content-between align-items-center' href=" . route_to('user.subjek') . ">
                            <span class='small fw-semibold'>Lihat Catatan</span>
                                <svg class='icon'>
                                    <use xlink:href='dist/vendors/@coreui/icons/svg/free.svg#cil-chevron-right'></use>
                                </svg>
                            </a>
                        </div>";
                    echo "</div>";
                    echo "</div>";
                    //    echo  "</a>";
                } ?>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.col-->
</div>
<!-- /.row-->
<?= $this->endSection(); ?>