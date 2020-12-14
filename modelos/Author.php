<?php
class Author
{
    private $db;
    public function __construct()
    {
        require('Conexion.php');
        $this->db = Conexion::getInstance();
    }

    public function getAuthors()
    {
        $sql = "select autor_id, CONCAT(nombre, ' ', a_paterno, ' ', a_materno ) as nombre from autores";
        $result = $this->db->prepare($sql);
        $result->execute();
        if($result->rowCount() > 0){
            $autores = $result->fetchAll(PDO::FETCH_OBJ);
            return $autores;
        }else{
            return 'Sin autores';
        }
    }

    public static function createAutor($nombre, $a_paterno, $a_materno, $nobel){
        require('Conexion.php');
        $respuesta = [];
        $db = Conexion::getInstance();
        $sql = "select * from fn_create_autor('". $nombre . "','" . $a_paterno . "','" . $a_materno . "'," . $nobel . "::boolean)";
        $result = $db->prepare($sql);
        $result->execute();
        if($result->rowCount()>0){
            
            array_push($respuesta, true);
            array_push($respuesta, $result->fetch(PDO::FETCH_OBJ));
        }else{
             array_push($respuesta,false);
        }
        return $respuesta;
    }
}
