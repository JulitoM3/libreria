<?php
require('../modelos/NewUser.php');

$usuarios = NewUser::showAllUsers();

require('../vistas/administrador/usuarios.php');