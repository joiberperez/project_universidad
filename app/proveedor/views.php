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
        $filtro = isset($_GET["filtro"]) ? $_GET["filtro"] : "";
        $totalRegistros = $model->get_count(campo:'nombre_empresa',filtro:$filtro);
        $registrosPorPagina = 10; // Número de registros por página
        $this->totalPaginas = ceil($totalRegistros / $registrosPorPagina);
        $this->paginaActual = isset($this->page) ? (int)$this->page : 1;

        // Asegurarse de que la página actual esté dentro de los límites
        if ($this->paginaActual < 1) $this->paginaActual = 1;
        if ($this->paginaActual > $this->totalPaginas) $this->paginaActual = $this->totalPaginas;
        $offset = ($this->paginaActual - 1) * $registrosPorPagina;
        $this->data = $model->get_page($registrosPorPagina,max(0,$offset),$filtro,campo:'nombre_empresa');
        $this->render($this->template);
        if(empty($this->data)){
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