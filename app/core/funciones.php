<?php

/* function render($template){
    include APPS;
    if(in_array("templates",scandir(ROOT))){
        if(file_exists(ROOT . "/templates/". $template . ".php")){
             
          include ROOT . "/templates/" . $template . ".php";
        //}else{
        }else{
            $encontrado = 0;
            foreach($apps as $app){
                $ruta = ROOT . '/' . $app;
                if(in_array("templates",scandir($ruta))){
                    if(file_exists($ruta . "/templates/". $template . ".php")){
                      $encontrado = 1;   
                      include $ruta . "/templates/" . $template . ".php";

                      break;
                    //}else{
                    }else{
                        $error = true;
                        
                   }
                }
            }
            $error = ($encontrado > 0) ?  "" : "La plantilla no existe";
            if(!$error){echo $error;}
            
       }

    }else{
      
    
    }
    } */
   

   
    function get_path($name_path){
      include ROOT . "/core/routes.php";
      foreach($routes as $route){
          if($name_path === $route['name']){
              return $route["path"];
              
          }
      }
      echo "no se ha encontrado la ruta con el nombre proporcionado";
      
    }



?>