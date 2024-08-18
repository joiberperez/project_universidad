<?php

function render($template){
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
}




?>