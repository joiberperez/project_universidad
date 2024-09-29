<?php include ROOT . "/templates/layouts/head.php"; ?>

<body class="nav-fixed">
    <?php include ROOT . "/templates/layouts/navbar.php"; ?>

    <div id="layoutSidenav">
        <?php include ROOT . "/templates/layouts/sidebar.php"; ?>

        <div id="layoutSidenav_content">

            <main>
                <!-- Main page content-->
                <div class="container-xl px-4 mt-5">
                    <!-- Custom page header alternative example-->
                    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-3">
                        <div class="me-4 mb-3 mb-sm-0">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/sistema/">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ventas</li>
                                </ol>
                            </nav>
                            <h1>Ventas</h1>

                            <div class="row">
                                <div class="col-lg-12">
                                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Facturas realizadas</div>
  <div class="card-body">
    <div class="row">
        <div class="col-6">
            <i class="fa-solid fa-clipboard-list" style="width: 100px;"></i>

        </div>
        <div class="col-6">
            <p class="card-text">500</p>

        </div>
    </div>
  </div>

                                </div>
                            </div>

                        </div>
                        <!-- Date range picker example-->

                    </div>
                    <!-- Illustration dashboard card example-->



                </div>
            </main>

            <footer class="footer-admin mt-auto footer-light">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright © Your Website 2021</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            ·
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <?php include ROOT . "/templates/layouts/scripts.php"; ?>

</body>