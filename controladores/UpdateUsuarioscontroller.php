<?php
require_once('../modelos/NewUser.php');
$id_usuario = htmlspecialchars($_GET['id']);
$editable = new NewUser();
$usuario = $editable->editUser($id_usuario);
require_once('../vistas/administrador/editUsuario.php');