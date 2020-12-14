<?php

class Validator
{
    private $errores = [];
    public function validar_vacio($campos)
    {
        if(is_array($campos)){

            foreach ($campos as $campo => $valor) {
                $camp = implode(' ', explode('_', $campo));
                if (trim($valor) == '') {
                    array_push($this->errores, 'El campo ' . $camp  . ' se encuentra vacío');
                }
            }
        }else{
            $camp = implode(' ', explode('_', $campos));
            var_dump($campos);
            if(trim($campos) == ''){
                array_push($this->errores, 'El campo ' . $camp  . ' se encuentra vacío');
            }
        }
        
    }
 

    public function validar_url($URL){
        if(!filter_var($URL, FILTER_VALIDATE_URL) & !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|](\.)[a-z]{2}/i",$URL)){
            array_push($this->errores, 'La url no es válida');
        }
    }

    public function validar_falla()
    {
        if (!count($this->errores) == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_errores()
    {
        return $this->errores;
    }


}
