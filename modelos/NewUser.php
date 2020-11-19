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
        $bool = $result->execute();
        if ($bool){
            $_SESSION['registrado'] = true;
            $_SESSION['message_registrado'] = 'Registrado correctamente';
            $result->execute();
            return header('Location:/');
        }else{
            $_SESSION['duplicado'] = true;
            $_SESSION['message_duplicado'] = 'El correo ya existe.';
            return header('Location:/registro.php');
        }
        
    }
    
    public function createUser($nombre, $a_paterno, $a_materno, $correo, $pass, $role){
        $sql = "select * from fn_create_user('" .$nombre . "','" . $a_paterno . "','" . $a_materno . "','" . $correo . "','" . $pass . "'," . $role . ")";
        $result = $this->db->prepare($sql);
        $bool = $result->execute();
         session_start();
          if($bool){
              $_SESSION['registrado'] = true;
              $_SESSION['message_registrado'] = '¡Usuario registrado correctamente!';
             }else{
                 $_SESSION['duplicado'] = true;
                 $_SESSION['message_duplicado'] = 'El correo ya siendo usado.';
             }
             return header('Location:/vistas/administrador/nuevo.php');
    }

    public static function showAllUsers(){
        require_once('Conexion.php');
        $db = Conexion::getInstance();
        $usuarios;
        $sql = "select * from fn_paginar_usuarios(5,1)";
        $result = $db->prepare($sql);
        $result->execute();
        if($result->rowCount() > 0){
            $usuarios = $result->fetchAll(PDO::FETCH_OBJ);
            return $usuarios;
        }else{
            return 'vaya...No se encontraron usuarios';
        }

        
    }

    public function searchUser($id){

    }

}