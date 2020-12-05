<?php

require('../modelos/NewUser.php');
$varPOST = json_decode(file_get_contents('php://input'), true);
$id = htmlspecialchars($varPOST['id']);
$updated_password = NewUser::updatePassword($id);

if(boolval($updated_password)){
    echo json_encode(array('message' => 'Contraseña por defecto establecida'));
}else{

}
