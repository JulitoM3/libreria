<?php

require_once('../modelos/Login.php');


$usuario = htmlspecialchars($_POST['usuario']);
$contraseña = htmlspecialchars($_POST['contraseña']);

if (!empty($usuario) && !empty($contraseña)) {

    $sess = new Login($usuario, $contraseña);

    $data = $sess->getSession();
    
    session_start();
    $_SESSION['usuario'] = $data['nombres'] . ' ' . $data['apellido_paterno'] . ' ' . $data['apellido_materno'];
    $_SESSION['role'] = $data['role_id'];

    var_dump($data['role_id']);

    if ($data['role_id'] === "1") {
        header('Location:administrador.php');
    }

    if ($data['role_id'] === "2") {
        header('Location:/vistas/recepcionista/recepcionista.php');
    }

    if ($data['role_id'] === "3") {
        header('Location:usuario.php');
    }
} else {
    $baseurl = $_SERVER['DOCUMENT_ROOT'];

    session_start();
    $_SESSION['empty'] = true;
    $_SESSION['empty_input'] = 'Todos los campos son necesarios';
    header('Location:/');

}
