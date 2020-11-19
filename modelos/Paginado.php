<?php 
class Paginado{
    private $db;
    public function __construct(){
        require_once('Conexion.php');
        $this->db = Conexion::getInstance();
    }

    public static function calcularUsuariosFirst(){
        require_once('Conexion.php');
        $db = Conexion::getInstance();
        $sql = "select count(*) from usuarios";
        $result = $db->prepare($sql);
        $result->execute();
        if($result->rowCount() > 0){
            $disponibles = $result->fetch(PDO::FETCH_NUM);
            return ($disponibles[0] - 5) / 5;
        }
    }
}