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

        header("Location: " . get_path('proveedor'));
    }
}



?>