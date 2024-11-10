<?php

class ViewVenta extends View
{
    public $template = "venta";
}

class ViewVentaCreate extends view
{
    public $template = "venta_create";

    public function get_queryset_cliente()
    {
        $con = new ModelProveedor();
        $sql = $con->conn->query("select * from cliente");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}

class ViewVentaClientList extends View{

    public function get_queryset($filtro){
        $model = new ModelCliente();
        $cliente = $model->conn->query("SELECT * FROM cliente WHERE cedula LIKE '%$filtro%' limit 5");
        return $cliente->fetchAll(PDO::FETCH_ASSOC);

    }

    public function get()
    {
        $filtro = $_GET["term"];
        echo json_encode($this->get_queryset($filtro));
    }
}

class ViewVentaCreateList extends View
{
    public $template = "venta_producto_lista";

    public function get_queryset_producto($filtro)
    {
        $model = new ModelProducto();
        $sql = $model->conn->query("SELECT * FROM productos WHERE nombre LIKE '%$filtro%'");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get()
    {
        $filtro = $_GET["filtro"];
        if (strlen($filtro) >= 3) {
            $productos = $this->get_queryset_producto($filtro);
            if (!empty($productos)) {
                $this->context["productos"] = $productos;
            } else {
                $this->context["error_producto"] = "no se han encontrado productos";
            }
        }
        $this->render($this->template, $this->context);
    }
}
