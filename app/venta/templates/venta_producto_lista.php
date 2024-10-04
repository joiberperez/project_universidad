<li class="list-group-item bg-success text-white text-center">Productos</li>
<?php if (!empty($productos)) { ?>
    <?php foreach ($productos as $producto) { ?>
        <?php 
            // Utilizar json_encode() con flags para asegurar la validez del JSON
            $producto_serializer = json_encode($producto); 
            
            ?>
            
        <button class="list-group-item list-group-item-action text-center" 
                onclick="cargarProducto(`<?= $producto['nombre']?>` ,<?= $producto['precio']?> )">
            <?= htmlspecialchars($producto["nombre"]) ?> -- $<?= number_format($producto["precio"], 2) ?>
        </button>
    <?php } ?>
<?php } ?>

<?php if (isset($error_producto)) { ?>
    <p class="text-center mt-2"><?= htmlspecialchars($error_producto) ?></p>
<?php } ?>