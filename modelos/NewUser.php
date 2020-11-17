<?php

class NewUser{
    private $db;
    public function __construct(){
        require_once('Conexion.php');
        $this->db = Conexion::getInstance();
    }

    public function createNormalUser($nombre, $a_paterno, $a_materno, $correo, $pass){
        $sql = "select * from fn_create_user('" . $nombre . "','" . $a_paterno . "','" . $a_materno . "','" . $correo . "','" . $pass . "'," . 3 . ")";
        $result = $this->db->prepare($sql);
        session_start();
        if (boolval($result->execute())){
            $_SESSION['registrado'] = true;
            $_SESSION['message_registrado'] = 'Registrado correctamente';
            $result->execute();
            header('Location:/');
        }else{
            $_SESSION['duplicado'] = true;
            $_SESSION['message_duplicado'] = 'El correo ya existe.';
            header('Location:/registro.php');
        }
        
    }

}