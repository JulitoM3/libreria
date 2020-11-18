<?php
require_once("../modelos/NewUser.php");
$new_user = new NewUser();

$nombre = htmlspecialchars($_POST['nombre']);
$a_paterno = htmlspecialchars($_POST['a_paterno']);
$a_materno = htmlspecialchars($_POST['a_materno']);
$correo = htmlspecialchars($_POST['correo']);
$pass = htmlspecialchars($_POST['pass']);

$new_user->createNormalUser($nombre, $a_paterno, $a_materno, $correo, $pass);
