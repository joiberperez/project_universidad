<?php include ROOT . "/templates/layouts/head.php"; ?>


<style>
    .select2-container--bootstrap-5 .select2-selection--single {
        height: calc(2.25rem + 2px);
        /* Tamaño adecuado para inputs de Bootstrap */
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border: 1px solid #ced4da;
        border-radius: 5px;
    }
</style>

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
                        <div class="row">
                            <div class="col-lg-8 col-sm-12">
                                <div class="card" style="width: 100%">


                                    <h5 class="card-header bg-primary text-white">Nueva Venta</h5>
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Código</label>
                                                    <input type="email" class="form-control" onclick="abrirModalProducto();" id="exampleFormControlInput1" placeholder="name@example.com">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                                    <input type="email" class="form-control" onclick="abrirModalProducto();" id="producto_nombre" placeholder="name@example.com">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                                <div class="input-group mb-3">
                                                    <button class="btn btn-outline-primary" onclick="decrement()" type="button" id="button-addon1">-</button>
                                                    <input type="text" class="form-control" id="cantidad" value="1" placeholder="" aria-label="Texto de ejemplo con complemento de botón" aria-describedby="button-addon1">
                                                    <button class="btn btn-outline-primary" onclick="increment()" type="button">+</button>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Precios</label>
                                                    <select class="form-select" aria-label="Default select example" name="proveedor">
                                                        <option value="1">Precio al detal</option>
                                                        <option value="1">Precio al mayor</option>
                                                        <option value="1">Precio empleado</option>
                                                        <option value="1">Precio libre</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Monto</label>
                                                    <input type="email" class="form-control" id="monto_producto" readonly placeholder="name@example.com">
                                                </div>

                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-3 mt-5">
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">


                                                    <div class="div">

                                                        <label for="exampleFormControlInput1" class="form-label"></label>
                                                        <div class="mb-3 me-1">

                                                            <button class="btn btn-primary btn-sm">Agregar</button>
                                                        </div>
                                                    </div>
                                                    <div class="">


                                                        <label for="exampleFormControlInput1" class="form-label"></label>
                                                        <div class="mb-3">
                                                            <button class="btn btn-success btn-sm">Limpiar</button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="card" style="width: 100%">

                                    <h5 class="card-header bg-primary text-white">

                                        <div class="row">
                                            <div class="col-8">
                                                <div class="mt-2">
                                                    Cliente

                                                </div>

                                            </div>
                                            <div class="col-4">
                                                <div style="text-align:right"><button class="btn btn-info btn-sm"><i class="fa-solid fa-plus"></i></button></div>
                                            </div>
                                        </div>
                                    </h5>

                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <div class="form-group">

                                                        <label for="exampleFormControlInput1" class="form-label">Selecciona Cliente</label>
                                                        <select class="form-select" id="select2" aria-label="Default select example" name="proveedor">

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
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

</body>


<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Launch Demo Modal</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="container">
                    <div class="input-group input-group-joined">
                        <span class="input-group-text">
                            <i data-feather="search"></i>
                        </span>
                        <input type="text" class="form-control " id="buscarProducto" onkeyup="listarProductosVenta()" placeholder="busca producto por codigo o nombre">
                    </div>

                    <div class="mt-5"></div>

                    <ul class="list-group" id="listaProducto">
                        <li class="list-group-item bg-success text-white text-center">Productos</li>

                    </ul>

                </div>



            </div>


        </div>
    </div>
</div>

<script>
 

    
    $(document).ready(function() {
        $('#select2').select2({
            theme: 'bootstrap-5', // Utiliza el tema de Bootstrap
            placeholder: 'Selecciona un cliente',
            minimumInputLength: 3,
            language: "es",
            ajax: {
                url: '<?= $this->get_path("venta_cliente_list") ?>', // URL del servidor que devuelve datos
                dataType: 'json', // Tipo de datos esperados
                delay: 250, // Retardo antes de realizar la solicitud
                processResults: function(data) {
                    console.log(data);
                    // Procesar los resultados recibidos del servidor
                    
                    return {
                        results: data.map(function(cliente) {
                            return {
                                id: cliente.id, // El valor del ID del país
                                text: cliente.nombre // El texto a mostrar en el dropdown
                            };
                        })
                    };
                },
                cache: true
            }

        });
    });
</script>
<script>
    function abrirModalProducto() {
        $(".modal").modal("show");
    }

    function increment() {
        let input = $("#cantidad").val();

        $("#cantidad").val(parseInt(input) + 1)
    }

    function decrement() {
        let input = $("#cantidad").val();

        $("#cantidad").val(parseInt(input) - 1)

    }

    function listarProductosVenta() {
        let filtro = $("#buscarProducto").val();
        $.get("<?= $this->get_path("venta_create_list") ?>", {
            filtro
        }).done(function(data) {
            $("#listaProducto").html(data);
        })
    }

    function cargarProducto(nombre, precio) {

        $("#producto_nombre").val(nombre)
        $("#monto_producto").val(`$${precio}`)
        $(".modal").modal("hide");

    }
</script>