<?php

class ModelProducto extends Model
{
    public $table = "productos";


    function get_page($registrosPorPagina, $offset, $filtro, $campo)
    {
        $sql = "SELECT p.id, p.nombre AS producto_nombre, p.precio, p.iva, c.nombre AS categoria_nombre, pr.nombre_empresa AS proveedor_nombre FROM productos p JOIN categorias c ON p.categoria_id = c.categoria_id JOIN proveedores pr ON p.proveedor_id = pr.id WHERE $campo LIKE '%$filtro%' LIMIT :limit OFFSET :offset";
      
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':limit', $registrosPorPagina, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $clientes;
    }

    function get_count($campo = null, $filtro = null)
    {
        if (!empty($campo)) $sql = "SELECT COUNT(*) FROM $this->table WHERE $campo LIKE '%$filtro%'";
        else $sql = "SELECT COUNT(*) FROM $this->table";
        $stmt = $this->conn->query($sql);
        $totalRegistros = $stmt->fetchColumn();
        return $totalRegistros;
    }
}
