<?php 

class ViewVenta extends View{
    public $template = "venta"; 

}

class ViewVentaCreate extends view{
    public $template = "venta_create";

    public function get_queryset_cliente(){
        $con = new ModelProveedor();
        $sql = $con->conn->query("select * from cliente");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>