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
        $.get("/sistema/cliente/page/" + page + "/").done(function(e) {
            
            $("#data-table").html(e)

        })
    }
</script>