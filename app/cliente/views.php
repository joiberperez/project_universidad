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
        
        // Obtener el filtro
        $filtro = $_GET["filtro"] ?? ""; // Uso del operador null coalescing

        // Contar total de registros
        $totalRegistros = $model->get_count(campo: 'cedula', filtro: $filtro);
        $registrosPorPagina = 10;
        $this->totalPaginas = ceil($totalRegistros / $registrosPorPagina);
        
        // Determinar la página actual
        $this->paginaActual = max(1, min($this->totalPaginas, (int)($this->page ?? 1)));

        // Calcular el offset
        $offset = ($this->paginaActual - 1) * $registrosPorPagina;

        // Obtener los registros de la página actual
        $this->data = $model->get_page($registrosPorPagina, max(0, $offset), $filtro, campo: 'cedula');

        // Renderizar la vista
        $this->render($this->template);
        
        // Mensaje si no hay resultados
        if (empty($this->data)) {
            echo "<h1 style='text-align:center'>No se ha encontrado los resultados</h1>";
        }
    }

}
