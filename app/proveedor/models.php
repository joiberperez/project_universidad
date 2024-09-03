<?php

class ModelProveedor extends Model {
    private $con;
    


    function __construct(){
        
        //cuando se instacie va a hacer la conexion
        $this->con = $this->conexion();

    }

     function getAll(){
        $query = $this->con->query("SELECT * FROM proveedores");
        $query = $query->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }
    
    function create($datos){
            
        $this->con->query("INSERT INTO proveedores " . ' ' . $this->consultaPost($datos));
        echo "se ha creado el usuario con exito";

     }
     function consultaPost($datos){
         $fields = "(";
         $dataFields = " VALUES (";
         foreach($datos as $key => $valor){
             $fields.= $key. ',';
             $dataFields .= '"'. $valor . '"' . ',';
         }
         $fields[-1] = ")";
         $dataFields[-1] = ")"; 
         return $fields . $dataFields;
     }


}


?>