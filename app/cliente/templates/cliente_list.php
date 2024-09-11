<table class="table">

    <thead>
        <th>#</th>
        <th>nombre</th>
        <th>Cedula</th>
        <th>Direccion</th>
        <th>Telefono</th>
    </thead>
    <tbody id="tableDataCliente">

            <?php foreach ($this->data as $cliente) { ?>
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

<?php include TEMPLATES . "pagination.php" ?>