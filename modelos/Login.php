<?php
class Login{
    private $db;
    private $usuario;
    private $pass;
    private $exists;


    public function __construct($usuario, $contraseña){
        $this->usuario = $usuario;
        $this->pass = $contraseña;
        require_once('Conexion.php');
        $this->db = Conexion::getInstance();
    }

    public function getSession(){
        
     $sql = "select u.id as user_id, u.nombres, u.apellido_paterno, u.apellido_materno, r.id as role_id 
                  from user_roles as ur 
                  inner join users as u on u.id = ur.user_id
                  inner join roles as r on r.id = ur.role_id 
                  WHERE email = '" . $this->usuario . "' AND passwords = '". $this->pass . "'";
     

     $result = $this->db->prepare($sql);
     $result->execute();
     if($result->rowCount()>0){
         $this->usuario = $result->fetch(PDO::FETCH_OBJ);
         $this->usuario->existe = true;
         return $this->usuario;
     }else{
         $error = 'no existe';
         return  $error;
     }
        $result->closeCursor();

    }
    
}