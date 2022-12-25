
  <body>
    <!-- Register form -->
      <div class="container-fluid">
        <div class="row h-100">
          <div class="col-4 text-black">

            <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-4 pt-5 pt-xl-0 mt-xl-n5">
    
              <form class="text-start mt-4 needs-validation" method="POST" action="/register" style="width: 23rem;">
              <?php $validation = \Config\Services::validation(); ?>
           
              <?= csrf_field(); ?>
              <?php if( !empty( session()->getFlashdata('fail') ) ) : ?>
                  <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
              <?php endif ?>

              <?php if( !empty( session()->getFlashdata('success') ) ) : ?>
                  <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
              <?php endif ?>
                <h3 class="fw-normal mt-4 pb-2" style="letter-spacing: 1px;">Daftar</h3>
                <p>Selamat datang di Bagi Notes, masukkan data diri dengan benar.</p>
    
                <div class="form-outline mb-3">
                  <label class="form-label" for="form2Example18">Nama</label>
                  <input type="text" id="nama" name="nama" placeholder="Masukan nama" class="form-control form-control-lg" value="<?= set_value('nama') ?>" />
                </div>

                <div class="form-outline mb-3">
                  <label class="form-label" for="form2Example18">Email</label>
                  <input type="email" id="email" name="email" placeholder="Masukan email" class="form-control form-control-lg" value="<?= set_value('email') ?>" />
                </div>
    
                <div class="form-outline mb-3">
                  <label class="form-label" for="form2Example28">Password</label>
                  <input type="Password" id="Password" name="password" placeholder="Masukan password" class="form-control form-control-lg" value="<?= set_value('password') ?>"/>
                </div>

                <div class="form-outline mb-3">
                  <label class="form-label" for="form2Example28">Confirmation Password</label>
                  <input type="Password" id="Password" name="cpassword" placeholder="Confirm Password" class="form-control form-control-lg" value="<?= set_value('confirm_password') ?>"/>
                </div>
    
                <div class="pt-1 mb-4">
                  <button class="btn btn-primary w-50 " type="submit" name="submit_login">Daftar</button>
                  <br><br> 
                  <p>Sudah punya akun? 
                  <?php echo anchor('/login', 'Masuk', 'class="text-info text-gradient font-weight-bold"'); ?>
                  </p>
                </div>
  
              </form>
    
            </div>
    
          </div>
          <div class="col-8 px-0 d-none d-md-block bg-primary">
          </div>
        </div>
      </div>
    <!-- </section> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
