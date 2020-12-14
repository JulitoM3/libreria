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

            return $result->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Sin editoriales';
        }
    }
}
