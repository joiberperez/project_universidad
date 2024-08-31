<?php


class Model {
    //se crean las variables contenedoras de los datos para realizar la conexion a la base de datos
    private $dsn = 'mysql:host=localhost;dbname=chapulin';
    private $username = 'jr';
    private $password = 'jr12345'; 
    public function conexion (){

            $conexion = new PDO($this->dsn,$this->username,$this->password);
            return $conexion;
        }


    
}



?>