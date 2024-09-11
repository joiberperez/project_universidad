<table class="table">
    <thead>
        <th>#</th>
        <th>nombre_empresa</th>
        <th>rif</th>
        <th>correo_electronico</th>
        <th>Telefono</th>
    </thead>
    <tbody>

        <?php foreach ($this->data as $proveedor) { ?>
            <tr>

                <td><?= $proveedor["id"]; ?></td>
                <td><?= $proveedor["nombre_empresa"]; ?></td>
                <td><?= $proveedor["rif"]; ?></td>
                <td><?= $proveedor["correo_electronico"]; ?></td>
                <td><?= $proveedor["telefono_principal"]; ?></td>

                <td><button class="btn btn-secondary btn-sm"  type="button" onclick="abrirModal(<?=$proveedor['id']?>)" ><i class="fa-solid fa-magnifying-glass"></i></button></td>
            </tr>
        <?php } ?>

    </tbody>
</table>

<?php //include TEMPLATES . "pagination.php" ?>

<nav aria-label="...">
    <ul class="pagination">
        <?php
        if ($this->paginaActual > 1) { ?>
            <li class="page-item ">
                <button class='page-link' onclick='cargarPagina( <?= ($this->paginaActual - 1) ?>)'>Anterior</button>
            </li>

        <?php } ?>
        <?php
        for ($i = 1; $i <= $this->totalPaginas; $i++) {
            if ($i == $this->paginaActual) { ?>

                <li class="page-item active">
                    <button class='page-link' onclick='cargarPagina(<?= $i ?>)'> <?= $i ?> </button>
                </li>

            <?php } else { ?>
                <li class="page-item">
                    <button class='page-link' onclick='cargarPagina(<?= $i ?>)'> <?= $i ?> </button>
                </li>
        <?php }
        } ?>

        <?php if ($this->paginaActual < $this->totalPaginas) { ?>

            <li class="page-item ">
                <button class='page-link' onclick='cargarPagina(<?= ($this->paginaActual + 1) ?>)'>Siguiente</button>
            </li>
        <?php } ?>
    </ul>
</nav>


<script>
    
    function cargarPagina(page) {
        $.get("/sistema/proveedor/page/" + page + "/").done(function(e) {
            
            $("#data-table").html(e)

        })
    }
</script>