<?php include ROOT . "/templates/layouts/head.php"; ?>

<body class="nav-fixed">
    <?php include ROOT . "/templates/layouts/navbar.php"; ?>

    <div id="layoutSidenav">
        <?php include ROOT . "/templates/layouts/sidebar.php"; ?>

        <div id="layoutSidenav_content">

            <main>
                <header style="background-color: #2A3F54;" class="page-header page-header-dark bg-primary pb-10">
                    <div class="container-xl px-4">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather="users"></i></div>
                                        Ventas

                                    </h1>
                                    <div class="page-header-subtitle">Aqui puedes gestionar las ventas</div>
                                    <a class="mt-3 btn btn-primary" href="<?= $this->get_path("venta_create"); ?>">Agregar Venta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container-xl px-4 mt-n10">

                    <div class="row">
                        <div class="col-xxl-8">
                            <!-- Tabbed dashboard card example-->
                            <div class="card mb-4">
                                <div class="card-header">
                                    Listado de Ventas realizadas
                                </div>

                                <div class="card-body">
                                    <div id="data-table">

                                    </div>
                                </div>
                            </div>
                            <!-- Illustration dashboard card example-->


                        </div>

                    </div>
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
    <script>
         $(document).ready(function(){
            $.get("/sistema/cliente/page/1/").done(function(data){
                $("#data-table").html(data);
            })
            
        })
    </script>
</body>
