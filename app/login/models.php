<?php


class ModelLogin extends Model{
    private $con;
    


    function __construct(){
        echo "hola";
        //cuando se instacie va a hacer la conexion
        $this->con = $this->conexion();

    }
    //hace la seleccion del usuario
    public function selectUser($usuario){
        echo "hola";
        $query = $this->con->query("SELECT * FROM seguridad where usuario='$usuario'");
        return $query;
        
    }
}


?>