<?php

class ViewProducto extends View{
    public $template = "producto";
}

class ViewProductoList extends View {
    public $template = "producto_list";
    public $totalPaginas;
    public $paginaActual;
    private $page;
    public $data;

    public function __construct($parameters)
    {
        
        $this->page = $parameters[1];
        
        parent::__construct();
    }
    public function get_queryset(){
       
    }
    public function get(){
        $model = new ModelProducto();
        
        // Obtener el filtro
        $filtro = $_GET["filtro"] ?? ""; // Uso del operador null coalescing

        // Contar total de registros
        $totalRegistros = $model->get_count(campo: 'nombre', filtro: $filtro);
        $registrosPorPagina = 10;
        $this->totalPaginas = ceil($totalRegistros / $registrosPorPagina);
        
        // Determinar la página actual
        $this->paginaActual = max(1, min($this->totalPaginas, (int)($this->page ?? 1)));

        // Calcular el offset
        $offset = ($this->paginaActual - 1) * $registrosPorPagina;

        // Obtener los registros de la página actual
        $this->data = $model->get_page($registrosPorPagina, max(0, $offset), $filtro, campo: 'p.nombre');

        // Renderizar la vista
        $this->render($this->template);
        
        // Mensaje si no hay resultados
        if (empty($this->data)) {
            echo "<h1 style='text-align:center'>No se ha encontrado los resultados</h1>";
        }

        
    }
}
class ViewProductoCreate extends View {
    public $template = "producto_crear";
    
    public function get_queryset_categorias(){
        $con = new Model();
        $sql = $con->conn->query("select * from categorias");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function get_queryset_proveedor(){
        $con = new ModelProveedor();
        $sql = $con->conn->query("select * from proveedores");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get(){

        $this->render($this->template);
    }

    public function post(){
        $data = $_POST;
        $producto = [
            'nombre'=> $data["nombre"],
            'categoria_id'=> $data["categoria"],
            'iva'=> $data["iva"],
            'proveedor_id'=> $data["proveedor"],
            'precio'=> $data["precio"],

        ];
        $model = new ModelProducto();
        $model->create($producto);
        header("Location: " . $this->get_path("producto"));
    }
}
?>