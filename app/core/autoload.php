<?php 
 /*********************************************************************
     * Revisión y depuración realizadas por "Sathoru-Dev"                *
     * Revisado el dia: Sabado, 07 de Septiembre del 2024                *
     * Por favor abstenerse de editar algo sin permiso del programador   *
     * Copyright © Joiber (Uso educativo) - Proyecto universitario       *
    *********************************************************************/
    
    spl_autoload_register(function($class){
        include FILE_APPS; # Incluye el archivo de registro de los modulos

        $ruta = ""; # Contiene la ruta absuluta del archivo de la clase
        $find_app = false; # Contiene un true o false si se ha encontrado una coincidencia en las apps

        # Recorre todas las apps registradas para verificar si la solicitud de la clase es un modulo
        # O elemento del nucleo del sistema
        foreach($apps as $app) {
            # Para mejor lectura del codigo se utiliza esta variable que contiene la clase en minusculas
            $tmp_lower_class = strtolower($class);

            # Si el nombre de la clase existe en el elemento iterado
            if( strpos($tmp_lower_class, $app) !== false ) {

                # Si la clase encontrada en las apps es un Modelo
                if(strpos($class,'Model') !== false ) { $ruta = APP . "$app/models.php"; } # Si existe se guarda la ruta del archivo
                
                # Si la clase encontrada en las apps es una Vista
                else if(strpos($class,'View') !== false ){ $ruta = APP . "$app/views.php"; } # Si existe se guarda la ruta del archivo

                # En caso de encontrar una coincidecia en las apps, y no de la clase se envia un erorr
                else { echo "no se ha encontrado clase $class"; exit; }

                $find_app = true; # Notifica que se ha encontrado una coincidencia
                break; # Rompe la ejecucion del bucle
            }
        }

        # Si no se ha encontrado la clase en las apps, buscar en los componentes del núcleo
        if (!$find_app) {
            # Mapear los nombres de clases a sus respectivas rutas
            $core_routes = [
                'Model'  => PATH_CORE . 'models.php',
                'Router' => PATH_CORE . 'router.php',
                'View'   => PATH_CORE . 'views.php',
                'Utils'   => PATH_CORE . 'utils.php',
            ];

            # Recorre las rutas asignadas anterioirmente
            foreach ($core_routes as $keyword => $path) {
                # Si existe la ruta se asigna y se detiene la ejecucion
                if (strpos($class, $keyword) !== false) { $ruta = $path; break; }
            }

            # Si no se encuentra una ruta válida, mostrar error y detener ejecución
            if (empty($ruta)) { echo "No se ha encontrado la clase $class"; exit; }
        }
        
        include $ruta; # Si todo salio bien, incluir el archivo y continuar con la ejecucion
    });

?>