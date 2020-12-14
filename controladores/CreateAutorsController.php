<?php
require('../modelos/Author.php');
require('../helpers/validator.php');
session_start();
$varPOST = json_decode(file_get_contents('php://input'), true);
$validator = new Validator();
$validator->validar_vacio($varPOST);

if (!$validator->validar_falla()) {
    $nombre = htmlspecialchars($varPOST['nombre']);
    $a_paterno = htmlspecialchars($varPOST['apellido_paterno']);
    $a_materno = htmlspecialchars($varPOST['apellido_materno']);
    $nobel = htmlspecialchars($varPOST['nobel']);
    $autores = Author::createAutor($nombre, $a_paterno, $a_materno, $nobel);
    
     if (boolval($autores[0])) {
         http_response_code(200);
         echo json_encode(
             [
                 'success' => 'Se registró el autor correctamente',
                 'id' => $autores[1],
             ],
             JSON_PRETTY_PRINT
         );
     } else {
         http_response_code(500);
         echo json_encode(['damaged' => 'Algo está mal con los datos'], JSON_PRETTY_PRINT);
     }
} else {
    http_response_code(500);
    echo json_encode($validator->get_errores(), JSON_PRETTY_PRINT);
}
