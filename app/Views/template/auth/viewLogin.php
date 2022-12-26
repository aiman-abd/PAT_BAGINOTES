<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">
                            <div class="card-body">
                                <h1>Login</h1>
                                <p class="text-medium-emphasis">Sign In to your account</p>
                                <form method="POST" action="<?php echo base_url("auth/login") ?>">
                                    <?php
                                    if ($session->getTempdata('errorUsernamePengguna')) {
                                        echo ' <small class="text-danger pl-3">' . $session->getTempdata('errorUsernamePengguna') . '</small>';
                                    }
                                    ?>
                                    <div class="input-group mb-3"><span class="input-group-text">
                                            <svg class="icon">
                                                <use xlink:href="<?php echo base_url("dist/vendors/@coreui") ?>/icons/svg/free.svg#cil-user"></use>
                                            </svg></span>
                                        <input class="form-control" type="text" placeholder="Username" name="username_pengguna">
                                    </div>
                                    <?php echo csrf_field() ?>
                                    <?php
                                    if ($session->getTempdata('errorPasswordPengguna')) {
                                        echo ' <small class="text-danger pl-3">' . $session->getTempdata('errorPasswordPengguna') . '</small>';
                                    }
                                    ?>
                                    <div class="input-group mb-4"><span class="input-group-text">
                                            <svg class="icon">
                                                <use xlink:href="<?php echo base_url("dist/vendors/@coreui") ?>/icons/svg/free.svg#cil-lock-locked"></use>
                                            </svg></span>
                                        <input class="form-control" type="password" placeholder="Password" name="password_pengguna">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-primary px-4" type="input">Login</button>
                                        </div>
                                </form>
                                <div class="col-6 text-end">
                                    <button class="btn btn-link px-0" type="button">Forgot password?</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card col-md-5 text-white bg-primary py-5">
                        <div class="card-body text-center">
                            <div>
                                <h2>Sign up</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                <?php echo anchor(base_url("auth/register/"), 'Sign Up Now', 'class="btn btn-lg btn-outline-light mt-3"')  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>