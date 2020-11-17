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
        
     $sql = "select u.usuario_id as user_id, u.nombre, u.a_paterno, u.a_materno, r.role_id as role_id 
     from user_roles as ur 
     inner join usuarios as u on u.usuario_id = ur.user_id
     inner join roles as r on r.role_id = ur.role_id 
     WHERE correo = '". $this->usuario . "' AND pass = '" . $this->pass ."'";
     

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