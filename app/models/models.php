<?php


class Model
{
    //se crean las variables contenedoras de los datos para realizar la conexion a la base de datos
    private $dsn = 'mysql:host=localhost;dbname=chapulin';
    private $username = 'jr';
    private $password = 'jr12345';
    public $table;
    protected $conn;

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
    function create2($datos){
        $this->consultaPost($this->conn, $this->table, $datos);
        
    }

    function getAll(){
        $query = $this->conn->query("SELECT * FROM cliente");
        $query = $query->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }
    
/*     function create($datos){
            
        $this->conn->query("INSERT INTO cliente " . ' ' . $this->consultaPost($datos));
        echo "se ha creado el usuario conn exito";

     } */
}
