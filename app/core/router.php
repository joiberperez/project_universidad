<?php


/* class Router {
    
    

    function run(){
           include ROOT . "/core/routes.php";

            $url = $_SERVER['REQUEST_URI'];
            $url = explode("?",$url);
            $url = $url[0];

            
            
            
            foreach ($routes as $key => $value) {
               $ruta_registrada = preg_quote($value['path'], '/');

                // Reemplaza los segmentos variables con patrones de expresión regular apropiados
                if(strpos($ruta_registrada,"@int") != false){
                    $ruta_registrada = preg_replace('/@int/', '(\d+)', $ruta_registrada);
                    
                }else if(strpos($ruta_registrada,"@str") != false){
                    $ruta_registrada = preg_replace('/@str/', '(.*)', $ruta_registrada);

                }
               // print_r($ruta_registrada_expresion);
                
                // Crea la expresión regular completa para comparar las rutas
               $expresion_regular = '/^' . $ruta_registrada . '$/';


                if (preg_match($expresion_regular, $url,$matches)) {
                    $controller = $value['views'];
                    if(!isset($_SESSION["usuario"])){
                        //header('Location: /sistema/login/');
                        $login = new ViewLogin;
                    }else{

                        if(!isset($matches[1])){
                            $controller = new $controller();
                            
                        }else{
                            $controller = new $controller($matches[1]);
                            
    
                        }
                    }
                    

                    
                    exit;
                }
                
                
                
            }
            
            include( TEMPLATES . '404.php');
            
       }

    } */

?>

<?php
    /*********************************************************************
     * Revisión y depuración realizadas por "Sathoru-Dev"                *
     * Revisado el dia: Sabado, 07 de Septiembre del 2024                *
     * Por favor abstenerse de editar algo sin permiso del programador   *
     * Copyright © Joiber (Uso educativo) - Proyecto universitario       *
    *********************************************************************/

    /** Clase router se encarga de procesar las urls solicitadas por el usuario, obteniendo
     * y buscando las clases y archivos nesesarios para su ejecucion */
    class Router {
        # Metodos donde se almacenan los datos de las urls
        private $urls, $views, $names;

        # Realiza la importacion del archivo de urls
        private function load_urls() { include PATH_CORE . "urls.php"; }

        # Devuelve la url actual del navegador
        private function get_server_uri() {
            $url = explode("?",$_SERVER['REQUEST_URI']);
             return $url[0];
         }
        
        /**
         * Metodo para el registro de una nueva url
         * @param String $path Link de acceso ej. "home/pruebas"
         * @param String $view Clase de destino
         * @param String $name nombre de la url
         * @return void
         */
        private function new_url($path, $view, $name) {
            $id_url = Utils::generate_id(); # Id de la url en los arreglos

            # Registro de url en sus respectivos arreglos
            $this->urls[$id_url] = $path;
            $this->views[$id_url] = $view;
            $this->names[$id_url] = $name;
        }


        public function run() {
            $this->load_urls(); # Carga las urls
            $uri = $this->get_server_uri(); # Obtiene la url actual

            # Recorre el arreglo de rutas registradas en la propiedad de la clase
            foreach ( $this->urls as $id_url => $path_url) {

                $tmp_url = preg_quote($path_url, '/'); # Prepara la url iterada

                # Reemplaza los segmentos variables con patrones de expresión regular apropiados
                if(strpos($tmp_url,"@int") != false) { # Para parametros int
                    $tmp_url = preg_replace('/@int/', '(\d+)', $tmp_url);
                }
                if(strpos($tmp_url,"@str") != false){ # Para parametros str
                    $tmp_url = preg_replace('/@str/', '(.*)', $tmp_url);
                }

                # Crea la expresión regular completa para comparar las rutas
                $regex_validation = '/^' . $tmp_url . '$/';

                # Realiza la validacion
                if (preg_match($regex_validation, $uri, $matches)) {

                    # Obtiene la clase desde las propiedades usando el id
                    $controller = $this->views[$id_url]; 
                    
                    # Valida la sesion
                    if(!isset($_SESSION["usuario"])) { $login = new ViewLogin; } # De no haber iniciado sesion instancia el del login
                    
                    # Si todo esta correcto con la sesion
                    else {
                        if(!isset($matches[1])){ $controller = new $controller(); } # Ejecuta el si no contiene parametros
                        else{ $controller = new $controller($matches); } # Ejecuta si contiene parametros
                    }

                    exit; # Ya se ha culminado
                }
            }
            include ROOT . "/" . FOLDER_TEMPLATES  . "/404.php";
        }

        # Obtiene una url solo con el nombre de la ruta registrada
         public function get_path($name) {

            $this->load_urls(); # Cargamos las urls

            # Verifica si el nombre que se paso exista en los parametros
            if( array_search($name, $this->names) === false ){ echo "La ruta con el nombre: {$name} no se ha localizado"; exit(); }

            $id_ruta = array_search($name, $this->names); # Obtiene el id de la ruta
            $ruta = $this->urls[$id_ruta]; # Obtiene la ruta

            return 'http://'."{$_SERVER["SERVER_NAME"]}".$ruta; # Devuelve la url
        }
    }
