<?php

    /*********************************************************************
     * Revisión y depuración realizadas por "Sathoru-Dev"                *
     * Revisado el dia: Domingo, 08 de Septiembre del 2024               *
     * Por favor abstenerse de editar algo sin permiso del programador   *
     * Copyright © Joiber (Uso educativo) - Proyecto universitario       *
    *********************************************************************/

    class View extends Router{
        
        public $template = ''; # Nombre de la plantilla a solicitar
        public $model = null; # Modelo asociado a esta vista
        public $object = null; # AUN POR ENTENDER
        public $context = []; # Array que contine todas las variables para la plantilla

        # Cumpliendo principios SOLID se deja el dispatch en un metodo privado
        # Luego se ejecuta desde aqui para a lo que se genere la instancia de la ruta ejecutarlo
        public function __construct() { $this->dispatch(); } 

        # Valida y recibe el tipo de peticion y ejecuta el metodo
        # Correspondiente
        private function dispatch(){
            if($_SERVER['REQUEST_METHOD'] === 'GET') { $this->get(); } # Si es una solicitud normal
            if($_SERVER["REQUEST_METHOD"] === 'POST') { $this->post(); } # Si es una peticion codificada
        }

        # Si la peticion es una solicitud normal
        public function get(){
            # Si no hay un objeto de datos, solamente se renderiza la plantilla
            if(!$this->object) { $this->render($this->template); }
        }

        # Si es una peticion codificada
        public function post() {
            # Obtiene los datos enviados desde el nevegador
            $dato = json_decode(file_get_contents("php://input")); 
            print_r($dato);

            # Los envia al modelo
            //$this->model->create($dato);
        }

        # Este metodo se encarga de imprimir en pantalla el contenido de una plantilla
        # Html que se le haya solicitado
        public function render($template,$context=null) {
            if(!empty($context)){
                extract($context);
            }
            include FILE_APPS; # Importa el arreglo con las apps registradas

            # Valida que exista una carpeta que contenga las plantillas
            if( in_array(FOLDER_TEMPLATES, scandir(ROOT)) ) {

                # Valida que exista en el directorio principal
                if ( file_exists(APP."/".FOLDER_TEMPLATES."/$template.php") ) {
                    include APP."/".FOLDER_TEMPLATES."/$template.php"; # Si existe la importa
                }

                # De no existir se procede a buscar aplicacion por aplicacion
                else {
                    $find = false; # Para detectar cuando se encuentre una plantilla

                    # Recorren las aplicaciones registradas para verificar su existencia dentro de estas
                    foreach($apps as $app){
                        # Se genera la ruta apuntando hacia cada app iterada
                        $url = ROOT . "/$app";

                        # Escanea el directorio y valida que existan carpetas de plantillas
                        if(in_array(FOLDER_TEMPLATES, scandir($url))) {

                            # Genera la ruta con la "supuesta" plantilla
                            $tmp_dir = "$url/" . FOLDER_TEMPLATES . "/$template.php";

                            # Verifica que exista la plantilla si esta existe se notifica por medio de la variable
                            # despues se realiza la importacion y por ultimo rompe el bucle
                            if (file_exists($tmp_dir)) { $find = true; include $tmp_dir; break; }
                            
                            # Si no se encuentra se marca un error
                            else { $error = true; }
                        }
                    }

                    # Valida y muestra el error en caso de no haber localizado alguna plantilla
                    $error = ($find) ?  "" : "La plantilla $template no existe";
                    if(!$error){echo $error;}
               }
            }

            # Si no hubo coincidencias se muestra el error
            else{ echo "la plantilla $template  no existe"; }
        }
    }

?>