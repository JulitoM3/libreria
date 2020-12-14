<?php

require('../modelos/Book.php');
require('../helpers/validator.php');

$nombre = htmlspecialchars($_POST['nombre']);
$paginas = htmlspecialchars($_POST['paginas']);
$precio = htmlspecialchars($_POST['precio']);
$stock = htmlspecialchars($_POST['stock']);
$autor_id = htmlspecialchars($_POST['autor_id']);
$editorial = htmlspecialchars($_POST['editorial']);
$img = htmlspecialchars($_POST['img']);


