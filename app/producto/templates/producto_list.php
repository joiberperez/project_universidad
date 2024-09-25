<table class="table">

    <thead>
        <th>#</th>
        <th>nombre</th>
        <th>Iva</th>
        <th>Categoria</th>
        <th>Proveedor</th>
        <th >Precio</th>
    </thead>
    <tbody id="tableDataCliente">

            <?php foreach ($this->data as $producto) { ?>
                <tr>

                    <td><?= $producto["id"]; ?></td>
                    <td><?= $producto["producto_nombre"]; ?></td>
                    <td><?php if($producto["iva"]== 1) echo "<div style='width:20px'><img style='width:100%' src=". PUBLICO . "images/cheket.png" . " alt=''></div>" ; else { echo "<div style='width:20px'><img style='width:100%' src=". PUBLICO . "images/failed.png" . " alt=''></div>" ; }?></td>
                    <td><?= $producto["categoria_nombre"]; ?></td>
                    <td><?= $producto["proveedor_nombre"]; ?></td>
                    <td>$<?= $producto["precio"]; ?></td>
                   
                </tr>
            <?php } ?>
            
        



    </tbody>
</table>

<?php include TEMPLATES . "pagination.php" ?>