<?php


class ModelLogin extends Model{

    


    //hace la seleccion del usuario
    public function selectUser($usuario){
        echo "hola";
        $query = $this->conn->query("SELECT * FROM seguridad where usuario='$usuario'");
        return $query;
        
    }
}


?>