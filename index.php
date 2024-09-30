<?php 
    /*********************************************************************
     * Revisión y depuración realizadas por "Sathoru-Dev"                *
     * Revisado el dia: Sabado, 07 de Septiembre del 2024                *
     * Por favor abstenerse de editar algo sin permiso del programador   *
     * Copyright © Joiber (Uso educativo) - Proyecto universitario       *
    *********************************************************************/

    session_start(); # Inicia el modulo de sesiones

    include "app/core/config.php"; # Carga el archivo de configuracion
    include PATH_CORE . "autoload.php" ; # Carga del modulo de instancias automaticas de clases

    $router = new Router(); # Inicia el router 
    $router->run(); # Ejecuta el super MVC
?>



