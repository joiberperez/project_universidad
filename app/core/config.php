<?php 
    /*********************************************************************
     * Revisión y depuración realizadas por "Sathoru-Dev"                *
     * Revisado el dia: Sabado, 07 de Septiembre del 2024                *
     * Por favor abstenerse de editar algo sin permiso del programador   *
     * Copyright © Joiber (Uso educativo) - Proyecto universitario       *
    *********************************************************************/

    # Se define un idioma, y una zona horaria
    include_once "locale.php";

    define('APP', 'app/'); # Directorio raiz de los componentes del sistema
    define("ROOT", str_replace('\\','/',dirname(__DIR__))); # Directorio raiz de todo el sistema

    define('APP_FOLDER', 'sistema/'); # Nombre de la carpeta contenedora de la app
    define('PATH_CORE', APP.'core/'); # Carpeta "Core" se encuentran los archivos criticos
    define("PUBLICO","/". APP_FOLDER ."public/"); # Carpeta donde se almacenan los archivos estaticos servidos por el navegador
    define('FOLDER_TEMPLATES', 'templates'); # Nombre de carpeta donde se almacenan las plantillas html

    define("FILE_APPS", PATH_CORE . 'apps.php'); # Archivo donde se encuentran registras los modulos del sistema

    define("NOMBRE_SISTEMA","Chapulin");



    define("TEMPLATES", ROOT . "/templates/");

?>