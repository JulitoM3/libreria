<?php
require('../modelos/NewUser.php');
require("../modelos/Paginado.php");
$usuarios = NewUser::showAllUsers();
$disponibles = Paginado::calcularUsuariosFirst();
require('../vistas/administrador/usuarios.php');