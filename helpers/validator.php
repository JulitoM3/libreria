<?php

class Validator
{
    private $errores = [];
    public function validar_vacio($campos)
    {
        foreach ($campos as $campo => $valor) {
            $camp = implode(' ', explode('_', $campo));
            if (trim($valor) == '') {
                array_push($this->errores, 'El campo ' . $camp  . ' se encuentra vacío');
            }
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
