<?php

class Editorial
{
    private $db;
    public function __construct()
    {
        require_once('Conexion.php');
        $this->db = Conexion::getInstance();
    }

    public function getEditorials()
    {

        $sql = "select editorial_id, nombre from editoriales";
        $result = $this->db->prepare($sql);
        $result->execute();
        if ($result->rowCount() > 0) {
            $editoriales = $result->fetchAll(PDO::FETCH_OBJ);
            return $editoriales;
        } else {
            return 'Sin editoriales';
        }
    }

    public function createEditorial($nombre, $sitio_web){
        $sql = "select * from fn_create_editoriales('".$nombre . "','". $sitio_web . "')";
        $result = $this->db->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
    }
}
