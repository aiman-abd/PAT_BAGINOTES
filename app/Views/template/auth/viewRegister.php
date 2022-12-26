<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4 mx-4">
                        <div class="card-body p-4">
                            <h1 class="nama-halaman">Register</h1>
                            <p class="text-medium-emphasis">Create your account</p>
                            <form method="POST" action="<?php echo base_url("auth/register") ?>">
                                <?php
                                if ($session->getTempdata('errorUsername')) {
                                    echo ' <small class="text-danger pl-3">' . $session->getTempdata('errorUsername') . '</small>';
                                }
                                ?>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="<?php echo base_url("dist/vendors/@coreui") ?>/icons/svg/free.svg#cil-user"></use>
                                        </svg></span>
                                    <input class="form-control" type="text" placeholder="Username" name="username_user" value="<?= set_value('username_user') ?>">
                                </div>
                                <?php
                                if ($session->getTempdata('errorEmail')) {
                                    echo ' <small class="text-danger pl-3">' . $session->getTempdata('errorEmail') . '</small>';
                                }
                                ?>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="<?php echo base_url("dist/vendors/@coreui") ?>/icons/svg/free.svg#cil-envelope-open"></use>

                                        </svg></span>
                                    <input class="form-control" type="email" placeholder="Email" name="email_user" value="<?= set_value('email_user') ?>" required>
                                </div>
                                <?php
                                if ($session->getTempdata('errorNama')) {
                                    echo ' <small class="text-danger pl-3">' . $session->getTempdata('errorNama') . '</small>';
                                }
                                ?>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="<?php echo base_url("dist/vendors/@coreui") ?>/icons/svg/free.svg#cil-pen"></use>

                                        </svg></span>
                                    <input class="form-control" type="text" placeholder="Nama anda" name="nama_user" value="<?= set_value('nama_user') ?>" required>
                                </div>
                                <?php
                                if ($session->getTempdata('errorPassword')) {
                                    echo ' <small class="text-danger pl-3">' . $session->getTempdata('errorPassword') . '</small>';
                                }
                                ?>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="<?php echo base_url("dist/vendors/@coreui") ?>/icons/svg/free.svg#cil-lock-locked"></use>
                                        </svg></span>
                                    <input class="form-control" type="password" placeholder="Password" name="password_user">
                                </div>
                                <?php
                                if ($session->getTempdata('errorPasswordConf')) {
                                    echo ' <small class="text-danger pl-3">' . $session->getTempdata('errorPasswordConf') . '</small>';
                                }
                                ?>
                                <div class="input-group mb-4"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="<?php echo base_url("dist/vendors/@coreui") ?>/icons/svg/free.svg#cil-lock-locked"></use>
                                        </svg></span>
                                    <input class="form-control" type="password" placeholder="Repeat password" name="confirmation_password">
                                </div>
                                <button class="btn btn-block btn-success" type="input">Create Account</button>
                                <p class="mb-0 text-sm mx-auto mt-3">
                                    Already have account?
                                    <?php
                                    echo anchor(base_url("auth/login/"), 'Login', 'class="text-info text-gradient font-weight-bold"');
                                    ?>
                                </p>
                        </div>
                        <div class="col-12 mt-2 mt-sm-3">
                        </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("h1.nama-halaman").html("Register | Bagi Notes ");
            $("title").html("Bagi Notes | Register");
            $("li.nama_item_web").html("My Book ");

        })
    </script>