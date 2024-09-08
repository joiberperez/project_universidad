<?php

class ViewCliente extends View
{
    public $template = "cliente";
    
    public function get()
    {
        
        $this->render($this->template);
        
    }

    public function post()
    {
        $data = [
            "nombre" => $_POST["nombre"],
            "cedula" => $_POST["cedula"],
            "telefono" => $_POST["telefono"],
            "direccion" => $_POST["direccion"],
        ];
        $model = new ModelCliente();
        $model->create($data);

        header("Location: " . $this->get_path('cliente'));
    }
}

class ViewClienteList extends View {
    private $filter;
    private $page;
    public $data;
    public $template = "cliente_list";
    public $totalPaginas;
    public $paginaActual;

    public function __construct($parameters)
    {
        
        $this->page = $parameters[1];
        
        parent::__construct();
    }

    public function get(){
        $model = new ModelCliente();
        $filtro = isset($_GET["filtro"]) ? $_GET["filtro"] : "";
        $totalRegistros = $model->get_count(campo:'cedula',filtro:$filtro);
        $registrosPorPagina = 10; // Número de registros por página
        $this->totalPaginas = ceil($totalRegistros / $registrosPorPagina);
        $this->paginaActual = isset($this->page) ? (int)$this->page : 1;

        // Asegurarse de que la página actual esté dentro de los límites
        if ($this->paginaActual < 1) $this->paginaActual = 1;
        if ($this->paginaActual > $this->totalPaginas) $this->paginaActual = $this->totalPaginas;
        $offset = ($this->paginaActual - 1) * $registrosPorPagina;
        $this->data = $model->get_page($registrosPorPagina,max(0,$offset),$filtro,campo:'cedula');
        $this->render($this->template);
        if(empty($this->data)){
            echo "<h1 style='text-align:center'>No se ha encontrado los resultados</h1>";
        }

        
    }

}
