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
                                        Proveedor
                                    </h1>
                                    <div class="page-header-subtitle">Puedes agregar agregar y ver el listodo de proveedores</div>
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
                                <div class="card-header border-bottom">
                                    <!-- Dashboard card navigation-->
                                    <ul class="nav nav-tabs card-header-tabs" id="dashboardNav" role="tablist">
                                        <li class="nav-item me-1"><a class="nav-link active" id="overview-pill" href="#overview" data-bs-toggle="tab" role="tab" aria-controls="overview" aria-selected="true">Listado</a></li>
                                        <li class="nav-item"><a class="nav-link" id="activities-pill" href="#activities" data-bs-toggle="tab" role="tab" aria-controls="activities" aria-selected="false">Agregar</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="dashboardNavContent">
                                        <!-- Dashboard Tab Pane 1-->
                                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-pill">
                                            <div class="row">
                                                <div class="col-8"></div>
                                                <div class="col-12 col-lg-4">
                                                    <form class="form-inline me-auto d-none d-lg-block me-3">
                                                        <div class="input-group input-group-joined input-group-solid">
                                                            <input class="form-control pe-0" type="search" placeholder="Search" aria-label="Search" />
                                                            <div class="input-group-text"><i data-feather="search"></i></div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <th>#</th>
                                                    <th>nombre</th>
                                                    <th>Cedula</th>
                                                    <th>Direccion</th>
                                                    <th>Telefono</th>
                                                </thead>
                                                <tbody>

                                                    <?php foreach ($this->proveedores as $cliente) { ?>
                                                        <tr>

                                                            <td><?= $cliente["id"]; ?></td>
                                                            <td><?= $cliente["nombre"]; ?></td>
                                                            <td>V- <?= $cliente["cedula"]; ?></td>
                                                            <td><?= $cliente["direccion"]; ?></td>
                                                            <td><?= $cliente["telefono"]; ?></td>
                                                        </tr>
                                                    <?php } ?>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Dashboard Tab Pane 2-->
                                        <div class="tab-pane fade" id="activities" role="tabpanel" aria-labelledby="activities-pill">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img class="opacity-75 mt-4" src="<?= PUBLICO ?>images/proveedor.png" alt="clientes" style="width: 90%;">
                                                </div>
                                                <div class="col-5">
                                                    <form action="<?= get_path('proveedor') ?>" method="post">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Nombre de Empresa</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre_empresa" placeholder="name@example.com">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Rif</label>
                                                            <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="rif"></input>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Correo electronico</label>
                                                            <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="correo_electronico"></input>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">tejefono principal</label>
                                                            <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="telefono_principal"></input>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Direccion</label>
                                                            <input class="form-control" id="exampleFormControlTextarea1" rows="3"></input>
                                                        </div>
                                                        <div class="d-grid gap-2">
                                                            <button class="btn btn-primary" type="button">Guardar</button>

                                                        </div>
                                                    </form>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Illustration dashboard card example-->


                        </div>

                    </div>
                </div>
            </main>

            <?php include ROOT . "/templates/layouts/footer.php" ?>
        </div>
    </div>

    <?php include ROOT . "/templates/layouts/scripts.php"; ?>
</body>