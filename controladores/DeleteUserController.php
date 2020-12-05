<?php

require('../modelos/NewUser.php');
$varPOST = json_decode(file_get_contents('php://input'), true);
$id = htmlspecialchars($varPOST["id"]);
// header('Content-Type: application/json');
$deleted = NewUser::deleteUser($id);
if(boolval($deleted)){
    echo json_encode(array('message' => 'Usuario eliminado correctamente'));
 }
