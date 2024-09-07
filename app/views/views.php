<?php

class View extends ViewRender{
    public $template = '';
    public $model = null;
    public $object = null;
    public function dispath(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $this->get();
        }
        if($_SERVER["REQUEST_METHOD"] === 'POST'){
            $this->post();
        }
    }


   public function get(){
        if(!$this->object){
            $this->render($this->template);

            
            
        }else{
            //echo (json_encode($this->model->getDetail($this->object)));
            //$this->model->disconnect();
            
        }
        //print_r(json_encode($this->model->getALL()));
    }
    public function post(){
        
            $dato = json_decode(file_get_contents("php://input"));
            
            $this->model->create($dato);
            

      
    }
     public function __construct()
    {
        $this->dispath();
    }

}

class ViewRender {
    
    function render($template){
        include APPS;
        $error = "";
        $encontrado = false;
        if(in_array("templates",scandir(ROOT))){
            if(file_exists(ROOT . "/templates/". $template . ".php")){
                 
              include ROOT . "/templates/" . $template . ".php";
            //}else{
            }else{
                foreach($apps as $app){
                    $ruta = ROOT . '/' . $app;
                    if(in_array("templates",scandir($ruta))){
                        if(file_exists($ruta . "/templates/". $template . ".php")){
                          $encontrado = true;   
                          include $ruta . "/templates/" . $template . ".php";
    
                          break;
                        //}else{
                        }else{
                            $error =  "<h1>La plantilla no existe</h1>";
                            
                        }
                    }
                }
                
                
            }
            
        }else{
            
            $error =  "<h1>La carpeta templates no se ha encontrado</h1>";
            
            
        }
        if(!$encontrado) echo $error; 
    }
}

?>