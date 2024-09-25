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
                                    <li class="breadcrumb-item active" aria-current="page">Productos</li>
                                </ol>
                            </nav>
                            <h1>Productos</h1>

                        </div>
                        <!-- Date range picker example-->

                    </div>
                    <!-- Illustration dashboard card example-->
                    <div class="card card-waves mb-4 mt-1">
                        <div class="card-body p-5">
                            <div class="row align-items-center justify-content-between">
                                <div class="col">
                                    <h2 class="text-primary">Bienvenid@ a Productos</h2>
                                    <p class="text-gray-700">En esta area podras registrar los nuevos productos que desee, asimismo reabastecer los productos ya existentes</p>
                                    <button class="btn btn-primary p-3" onclick="abrirModal('<?=$this->get_path('producto_create')?>')">
                                        Registrar Nuevo
                                        <i class="ms-1" data-feather="arrow-right"></i>
                                    </button>

                                </div>
                                <div class="col d-none d-lg-block mt-xxl-n4"><img class="img-fluid px-xl-4 mt-xxl-n5" style="width: 70%;" src="<?= PUBLICO ?>images/product1.png" /></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-12 mb-4">
                            <!-- Area chart example-->
                            <div class="card mb-4">
                                <div class="card-header">Listado de Productos</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">

                                            <form class="form-inline me-auto d-none d-lg-block me-3">
                                                <div class="input-group input-group-joined input-group-solid">
                                                    <input class="form-control pe-0" type="search" placeholder="Search" aria-label="Search" />
                                                    <div class="input-group-text"><i data-feather="search"></i></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-5"></div>
                                        <div class="col-12 col-lg-3">
                                            <a class="btn btn-primary p-3" href="#!">
                                                Reabastecer Producto

                                            </a>
                                        </div>
                                    </div>

                                    <div id="data-table"></div>
                                </div>
                            </div>

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
        function abrirModal(id) {


            $.get(id).done(function(data) {
                $("#modal").html(data);
                $(".modal").modal("show");

            })
        }
        $(document).ready(function() {
            $.get("<?= $this->get_path("producto_list", 1); ?>").done(function(data) {
                $("#data-table").html(data);
            })

        })

        function filtrarTabla() {
            let filtro = $("#busqueda-tabla").val();

            $.get("<?= $this->get_path("producto_list", 1); ?>", {
                filtro
            }).done(function(data) {
                console.log("hola")
                $("#data-table").html(data);
            })
        }
    </script>
</body>