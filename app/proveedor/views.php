<?php

class ViewProveedor extends View {
    public $template = 'proveedor';

    public $proveedores;

    public function get()
    {
        $model = new ModelProveedor();
        $this->proveedores = $model->getAll();
        
        $this->render($this->template);
    }
    
  
}

class ViewProveedorList extends View {
    private $filter;
    private $page;
    public $data;
    public $template = "proveedor_list";
    public $totalPaginas;
    public $paginaActual;

    public function __construct($parameters)
    {
        
        $this->page = $parameters[1];
        
        parent::__construct();
    }

    public function get(){
        
        $model = new ModelProveedor();
        
        // Obtener el filtro
        $filtro = $_GET["filtro"] ?? ""; // Uso del operador null coalescing

        // Contar total de registros
        $totalRegistros = $model->get_count(campo: 'nombre_empresa', filtro: $filtro);
        $registrosPorPagina = 10;
        $this->totalPaginas = ceil($totalRegistros / $registrosPorPagina);
        
        // Determinar la página actual
        $this->paginaActual = max(1, min($this->totalPaginas, (int)($this->page ?? 1)));

        // Calcular el offset
        $offset = ($this->paginaActual - 1) * $registrosPorPagina;

        // Obtener los registros de la página actual
        $this->data = $model->get_page($registrosPorPagina, max(0, $offset), $filtro, campo: 'nombre_empresa');

        // Renderizar la vista
        $this->render($this->template);
        
        // Mensaje si no hay resultados
        if (empty($this->data)) {
            echo "<h1 style='text-align:center'>No se ha encontrado los resultados</h1>";
        }

        
    }

}
class ViewProveedorDetail extends View{
    public $template = "proveedor_detail";
    public $data;
    public $id;

    public function __construct($id)
    {
        $this->id=$id[1];
        
        parent::__construct();
    }
    public function get(){
        $model = new ModelProveedor();
        $this->data = $model->getDetail($this->id);
        $this->render($this->template);
    }
}

?>