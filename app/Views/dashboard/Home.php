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
                            <div class="fs-4 fw-bold"><h1>1</h1></div>
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
                            <div class="fs-4 fw-bold"><h1>1</h1></div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                
        <div class="row">
              <div class="card mb-4">
                <div class="card-header">hmm</div>
                <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" id="jadwal-tab" data-bs-toggle="tab" data-bs-target="#jadwal" type="button" role="tab" aria-controls="jadwal"><svg class="icon me-2">
                        <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-list"></use>
                      </svg>Jadwal Kelas</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="lastseen-tab" data-bs-toggle="tab" data-bs-target="#lastseen" type="button" role="tab" aria-controls="lastseen" ><svg class="icon me-2">
                        <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-history"></use>
                      </svg>Terakhir dilihat</button>
                    </li>
                </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active table-responsive" id="jadwal" role="tabpanel" aria-labelledby="jadwal-tab">
                        <br>
                            <table class="table border mb-0">
                                <thead class="table-light fw-semibold">
                                    <tr class="align-middle">
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table> 
                            <br>
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Message:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send message</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="lastseen" role="tabpanel" aria-labelledby="lastseen-tab">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- /.row-->
<?= $this->endSection(); ?>