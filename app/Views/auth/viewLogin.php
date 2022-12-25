  <body>
    <!-- Login form -->
    <!-- <section class="vh-100 d-flex"> -->
      <div class="container-fluid">
        <div class="row h-100">
          <div class="col-4 text-black">

            <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-4 pt-5 pt-xl-0 mt-xl-n5">
    
              <form method="POST" action="/login" role="form" style="width: 23rem;">

                <h3 class="fw-normal mt-8 pb-3" style="letter-spacing: 1px;">Masuk</h3>
                <p>Selamat datang di Bagi Notes, masukkan email dan password
                  yang sudah didaftarkan</p>
    
                <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example18">Email</label>
                  <input type="email" name="email" id="email" placeholder="Masukan email" class="form-control form-control-lg" 
                    value="<?php if (isset($_COOKIE['login_email_cookie'])) {echo $_COOKIE['login_email_cookie']; } ?>" /> 
                </div>
    
                <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example28">Password</label>
                  <input type="password" id="password" placeholder="Masukan password" class="form-control form-control-lg" name="password" 
                  value="<?php if (isset($_COOKIE['login_password_cookie'])) { echo $_COOKIE['login_password_cookie']; } ?>" />
                </div>

                <p class="small mb-4 pb-lg-2"><a class="text-muted" href="#!">Lupa password?</a></p>
    
                <div class="pt-1 mb-4">
                  <button class="btn btn-primary w-50 " type="submit" name="submit_login">Masuk</button>
                  <br><br> 
                  <p>Belum punya akun?
                  <?php echo anchor('/register', 'Daftar', 'class="text-info text-gradient font-weight-bold"'); ?>
                  </p>
                </div>
  
              </form>
    
            </div>
    
          </div>
          <div class="col-8 px-0 d-none d-md-block p-3 bg-primary">
          </div>
        </div>
      </div>
    <!-- </section> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
