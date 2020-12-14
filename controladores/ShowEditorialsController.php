<?php
require('../modelos/Editoral.php');
$editorial = new Editorial();
$editoriales = $editorial->getEditorials();
if(is_object($editoriales)){
    http_response_code(200);
    echo json_encode($editoriales,JSON_PRETTY_PRINT);
}else{
    http_response_code(500);
    echo json_encode($editoriales,JSON_PRETTY_PRINT);
}