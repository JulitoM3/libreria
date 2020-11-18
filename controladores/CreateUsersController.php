<?php

require_once('../modelos/NewUser.php');

$nombre = htmlspecialchars($_POST['nombres']);
$a_paterno = htmlspecialchars($_POST['a_paterno']);
$a_materno = htmlspecialchars($_POST['a_materno']);
$correo = htmlspecialchars($_POST['correo']);
$pass = (isset($_POST['defect']) && boolval($_POST['defect'])) ? '12345678' : htmlspecialchars($_POST['password']);
$role = htmlspecialchars($_POST['role']);

session_start();
 if($role == 1 | $role == 2 | $role == 3){
     $new_user = new NewUser();
     $new_user->createUser($nombre, $a_paterno, $a_materno,$correo, $pass, $role);
}else{
    $_SESSION['bad_role'] = 'Parece que algo esta mal con el nivel de permiso';
    header('location:/vistas/administrador/nuevo.php');
}




