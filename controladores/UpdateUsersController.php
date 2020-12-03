<?php

require('../modelos/NewUser.php');

$id = htmlspecialchars($_POST['id']);
$permiso = htmlspecialchars($_POST['role']);
$nombre = htmlspecialchars($_POST['nombres']);
$a_paterno = htmlspecialchars($_POST['a_paterno']);
$a_materno = htmlspecialchars($_POST['a_materno']);
$correo = htmlspecialchars($_POST['correo']);

// echo $id . $permiso . $nombres . $a_paterno . $a_materno . $correo;
session_start();
$_SESSION['update_exito'];
$actualizado = NewUser::updateUser($id, $nombre, $a_paterno, $a_materno, $correo, $permiso);
if(boolval($actualizado)){
    $_SESSION['update_exito'] = true;
}else{
    $_SESSION['update_exito'] = false;
}
header('location:/controladores/EditUsuariosController.php?id=' . $id);