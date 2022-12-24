
<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
  <head>
    <!-- <base href="./"> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek"> -->
    <!-- <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard"> -->
    <title>BagiNotes | <?= (isset($pageTitle)) ? $pageTitle : 'Document'; ?></title>
    <base href="/">
    <link rel="icon" type="image/png" sizes="128x128" href="dist/assets/img/128x128/Logo Icon Dark.png">
    <link rel="manifest" href="dist/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="dist/assets/img/256x256/Logo Icon Dark.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="dist/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/dist/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="dist/css/examples.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="dist/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  </head>
  <body>

    <!-- Side -->
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <img class="logo" src="dist/assets/img/128x128/Logo Icon Text Light.png" alt="Baginotes Logo">
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link <?= (current_url() == base_url('user/home')) ? 'active' : ''; ?>" href="<?= route_to('user.home') ?>">
            <svg class="nav-icon">
              <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-home"></use>
            </svg>Home</a></li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-book"></use>
            </svg> Kelas</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link <?= (current_url() == base_url('user/probstat')) ? 'active' : ''; ?>" href="<?= route_to('user.probstat') ?>"><span class="nav-icon"></span>Probabilitas dan Statistika</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link <?= (current_url() == base_url('user/catatansaya')) ? 'active' : ''; ?>" href="<?= route_to('user.catatansaya') ?>">
            <svg class="nav-icon">
              <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
            </svg> Catatan Saya</a></li>
        <li class="nav-item"><a class="nav-link " href="https://www.ilovepdf.com/">
            <svg class="nav-icon">
              <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-loop"></use>
            </svg> Ilovepdf</a></li>
            <li class="nav-item"><a class="nav-link <?= (current_url() == base_url('user/pengaturan')) ? 'active' : ''; ?>" href="<?= route_to('user.pengaturan') ?>">
            <svg class="nav-icon">
              <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
            </svg> Pengaturan</a></li>
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <!-- Side -->

    <!-- header -->
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="#">
            <img width="118" height="46" class="logo" src="dist/assets/img/128x128/Logo Icon Text Dark.png" alt="Baginotes Logo">
            </img></a>
          <ul class="header-nav ms-auto">
            <!-- <nav class="navbar"> -->
              <form class="nav-item">
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1"><svg class="icon icon-lg">
                  <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-search"></use>
                </svg></a></li></span>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </div>
              </form>
            <!-- </nav> -->
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg></a></li>
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="dist/assets/img/avatars/8.jpg" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><a href="<?= route_to('user.home'); ?>">Home</a>
              </li>
              <li class="breadcrumb-item active"><span><?= (isset($pageTitle)) ? $pageTitle : 'Document'; ?></span></li>
            </ol>
          </nav>
        </div>
      </header>
      <!-- header -->

      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <?= $this->renderSection('content'); ?>
          
        </div >
      </div>
      <footer class="footer">
        <div class="ms-auto">Powered by&nbsp;<a href="<?= base_url(); ?>">Kelompok 4</a></div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="dist/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="dist/vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="dist/vendors/chart.js/js/chart.min.js"></script>
    <script src="dist/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="dist/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>
    <script>
      const triggerTabList = document.querySelectorAll('#myTab button')
      triggerTabList.forEach(triggerEl => {
        const tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', event => {
          event.preventDefault()
          tabTrigger.show()
        })
      })

      const triggerEl = document.querySelector('#myTab button[data-bs-target="#lastseen"]')
      bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name

      const triggerFirstTabEl = document.querySelector('#myTab li:first-child button')
      bootstrap.Tab.getInstance(triggerFirstTabEl).show() // Select first tab

      const exampleModal = document.getElementById('exampleModal')
      exampleModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        const modalTitle = exampleModal.querySelector('.modal-title')
        const modalBodyInput = exampleModal.querySelector('.modal-body input')

        modalTitle.textContent = `New message to ${recipient}`
        modalBodyInput.value = recipient
      })
    </script>

  </body>
</html>