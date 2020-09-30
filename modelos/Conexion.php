<?php

class Conexion {

    protected static $instancia;

    private function __construct(){}

    public static function getInstance(){
        if(empty(self::$instancia)){
            $db_host = 'localhost';
            $db_user = 'root';
            $db_password = '';
            $db_name = 'libreria';
            
            try {
                self::$instancia = new PDO('mysql:host='.$db_host . ';dbname=' .$db_name, $db_user,$db_password);
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);
            } catch (Exception $e) {
                echo 'Error en: ' . $e->getMessage() . '<br>';
                echo 'Linea: ' . $e->getLine();
            }
        }
        return self::$instancia;
    }


}