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



?>