<?php


class Model
{
    //se crean las variables contenedoras de los datos para realizar la conexion a la base de datos
    private $dsn = 'mysql:host=localhost;dbname=chapulin';
    private $username = 'jr';
    private $password = 'jr12345';
    public $table;
    public $conn;

    public function __construct(){
        $this->conn = $this->conexion();
    }

/*     public function getTable($tabla){
        $this->table = $tabla;
    } */


    public function conexion()
    {

        $conexion = new PDO($this->dsn, $this->username, $this->password);
        return $conexion;
    }

/*     function consultaPost($datos)
    {
        $fields = "(";
        $dataFields = " VALUES (";
        foreach ($datos as $key => $valor) {
            $fields .= $key . ',';
            $dataFields .= '"' . $valor . '"' . ',';
        }
        $fields[-1] = ")";
        $dataFields[-1] = ")";
        return $fields . $dataFields;
    } */

    function consultaPost($pdo, $tabla, $datos)
    {
        
        $fields = "(" . implode(',', array_keys($datos)) . ")";
        $placeholders = "(" . implode(',', array_map(function ($key) {
            return ':' . $key;
        }, array_keys($datos))) . ")";
    
        
        $sql = "INSERT INTO $tabla $fields VALUES $placeholders";
    
        
        $stmt = $pdo->prepare($sql);
    
        $stmt->execute($datos);
        
    }
    function create($datos){
        $this->consultaPost($this->conn, $this->table, $datos);
        
    }

    function getAll(){
        $query = $this->conn->query("SELECT * FROM $this->table");
        $query = $query->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }
    function getDetail($id){
        $query = $this->conn->query("SELECT * FROM $this->table WHERE id=$id");
        $query = $query->fetch(PDO::FETCH_ASSOC);
        return $query;
    }
    


     function get_page($registrosPorPagina,$offset,$filtro,$campo)
     {
         $sql = "SELECT * FROM $this->table WHERE $campo LIKE '%$filtro%' LIMIT :limit OFFSET :offset";
         $stmt = $this->conn->prepare($sql);
         $stmt->bindParam(':limit', $registrosPorPagina, PDO::PARAM_INT);
         $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
         $stmt->execute();
 
         $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
         return $clientes;
     }
 
     function get_count($campo=null,$filtro=null)
     {
         if(!empty($campo)) $sql = "SELECT COUNT(*) FROM $this->table WHERE $campo LIKE '%$filtro%'";
         else $sql = "SELECT COUNT(*) FROM $this->table";
         $stmt = $this->conn->query($sql);
         $totalRegistros = $stmt->fetchColumn();
         return $totalRegistros;
     }
}
