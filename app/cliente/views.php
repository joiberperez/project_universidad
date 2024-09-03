<?php

class ViewCliente extends View
{
    public $template = "cliente";
    public $clientes;

    public function get()
    {
        $model = new ModelCliente();
        $this->clientes = $model->getAll();
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
        $model->create2($data);

        header("Location: " . get_path('cliente'));
    }
}
