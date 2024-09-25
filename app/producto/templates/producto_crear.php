
<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Launch Demo Modal</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalles del Proveedor</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= $this->get_path('producto_create') ?>" method="post">
            <div class="modal-body">
            <!-- <div class="row">
                <div class="col-6">
                    <img class="opacity-75 " src="<= PUBLICO ?>images/producto2.png" alt="clientes" style="width: 50%;">

                </div>
                <div class="col-6 align-middle"><h1 class="text-center pt-5">Registro de producto</h1></div>
            </div> -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
    
                                <label for="exampleFormControlInput1" class="form-label">Nombre de Producto</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" placeholder="name@example.com">
    
                            </div>
                            <div class="col-lg-6 mb-3">
    
                                <label for="exampleFormControlTextarea1" class="form-label" >iva</label>
                                <select class="form-select" aria-label="Default select example" name="iva">
    
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
    
    
                                </select>
    
                            </div>
                            <div class="col-lg-6 mb-3">
    
                                <label for="exampleFormControlTextarea1" class="form-label">Categoria</label>
                                <select class="form-select" aria-label="Default select example" name="categoria">
                                    <?php foreach ($this->get_queryset_categorias() as $categoria) { ?>
                                        <option value="<?= $categoria["categoria_id"] ?>"><?= $categoria["nombre"] ?></option>
    
                                    <?php } ?>
                                </select>
    
                            </div>
                            <div class="col-lg-6 mb-3">
    
                                <label for="exampleFormControlTextarea1" class="form-label">Categoria</label>
                                <select class="form-select" id="select" aria-label="Default select example" name="proveedor">
                                    <?php foreach ($this->get_queryset_proveedor() as $categoria) { ?>
                                        <option value="<?= $categoria["id"] ?>"><?= $categoria["nombre_empresa"] ?></option>
    
                                    <?php } ?>
                                </select>
    
                            </div>
                            <div class="col-lg-6 mb-3">
    
                                <label for="exampleFormControlTextarea1" class="form-label">Precio</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary text-light" >$</span>
                                    <input type="text" class="form-control" name="precio" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">.00</span>
                                </div>
    
                            </div>
    
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" data-bs-dismiss="modal">Registrar</button>
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function(){
        
        $('#select').select2({
        dropdownParent: $('.modal')
    });
    })

</script>