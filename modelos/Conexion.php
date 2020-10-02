<?php

class Conexion {

    protected static $instancia;

    private function __construct(){}

    public static function getInstance(){
        if(empty(self::$instancia)){
            $db_host = '127.0.0.1';
            $db_user = 'julio';
            $db_password = 'Danielita';
            $db_name = 'libreria';
            try {
                self::$instancia = new PDO('pgsql:host='.$db_host . ';dbname=' .$db_name, $db_user,$db_password);
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);
            } catch (Exception $e) {
                echo 'Error en: ' . $e->getMessage() . '<br>';
                echo 'Linea: ' . $e->getLine();
            }
        }
        return self::$instancia;
    }


}