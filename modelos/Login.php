<?php
class Login{
    private $db;
    private $usuario;
    private $pass;


    public function __construct($usuario, $contraseña){
        $this->usuario = $usuario;
        $this->pass = $contraseña;
        require_once('Conexion.php');
        $this->db = Conexion::getInstance();
    }

    public function getSession(){
        
        $sql = "SELECT u.nombres, u.apellido_paterno, u.apellido_materno, r.role_id" .
                " FROM users_role as ur" . 
                " INNER JOIN users as u" . 
                " ON ur.user_id = u.users_id".
                " INNER JOIN roles as r". 
                " ON ur.role_id = r.role_id". 
                " WHERE email = '" . $this->usuario . "' AND pass = '". $this->pass . "'";

        $result = $this->db->prepare($sql);
        $result->execute();
        if($result->rowCount()>0){
            $this->usuario = $result->fetch(PDO::FETCH_ASSOC);
            return $this->usuario;
        }else{
            $error = 'No existe el usuario';
            return  $error;
        }

        
        $result->closeCursor();

    }
    
}