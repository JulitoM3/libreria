<?php

require('../modelos/Editoral.php');
require('../helpers/validator.php');
$editorial = new Editorial();
$validator = new Validator();

$varPOST = json_decode(file_get_contents('php://input'), true);
//var_dump($varPOST);
$validator->validar_vacio($varPOST);
$validator->validar_url($varPOST['web_editorial']);
 if(!$validator->validar_falla()){
     http_response_code(200);
    
      $nombre_editorial = $varPOST['nombre_editorial'];
      $web_editorial = $varPOST['web_editorial'];

      $id_editorial = $editorial->createEditorial($nombre_editorial, $web_editorial);
      echo json_encode([
          'success' => 'Se registró el editorial correctamente',
          'id' => $id_editorial
      ]);
}else{
    http_response_code(500);
    
    echo json_encode($validator->get_errores(), JSON_PRETTY_PRINT);
        
 }