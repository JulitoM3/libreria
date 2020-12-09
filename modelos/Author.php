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
        $sql = "select CONCAT(nombre, ' ', a_paterno, ' ', a_materno ) as nombre from autores";
        $result = $this->db->prepare($sql);
        $result->execute();
        if($result->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function createAutor($nombre, $a_paterno, $a_materno, $nobel)
}
