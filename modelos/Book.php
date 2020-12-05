<?php

class Book{

private $db;

    public function __construct()
    {
        require_once('Conexion.php');
        $this->db = Conexion::getInstance();
    }

    public static function showBooks(){
        require_once('Conexion.php');
        $db = Conexion::getInstance();

        $sql = "";

    }

    public function create(){

    }

}